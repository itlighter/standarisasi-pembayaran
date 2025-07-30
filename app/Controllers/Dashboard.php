<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Cookie\Cookie;

class Dashboard extends BaseController
{
    public function __construct()
    {
        $this->helpers = ['form', 'url'];
    }

    public function index()
    {
        if (! $this->isLoggedIn()) {
            return redirect()->to('/login');
        }

        if (isset($_SESSION['Answered'])){
            session()->remove('Answered');
        }

        if (isset($_SESSION['q1'])){
            $removeSession = ['q1','q2','q3','q4','q5','q6','q7','q8','q9','q10','q11','q12','q13',];
            session()->remove($removeSession);
        }

        $data = [
            'title' => 'Dashboard'
        ];

        return view('dashboard/index3', $data);
    }

    public function petunjukSewa()
    {
        if (! $this->isLoggedIn()) {
            return redirect()->to('login');
        }

        if (isset($_SESSION['Answered'])){
            session()->remove('Answered');
        }

        if (isset($_SESSION['q1'])){
            $removeSession = ['q1','q2','q3','q4','q5','q6','q7','q8','q9','q10','q11','q12','q13',];
            session()->remove($removeSession);
        }

        $data = [
            'title' => 'Petunjuk - Sewa'
        ];

        return view('dashboard/sewa3', $data);
    }

    public function sewa()
    {
        if (! $this->isLoggedIn()){
            return redirect()->to('login');
        }

        if(isset($_GET['tab'])){
            $keyHex = '603deb1015ca71be2b73aef0857d7781'; // Must match JS
            $key = hex2bin($keyHex);

            $encodedJson = $_GET['tab'] ?? '';
            if (!$encodedJson) {
                die("❗ No tab parameter provided.");
            }

            $decodedJson = base64_decode($encodedJson);
            $parsed = json_decode($decodedJson, true);

            if (!isset($parsed['iv'], $parsed['data'])) {
                die("❌ Invalid encrypted format.");
            }

            $iv = hex2bin($parsed['iv']);
            $ciphertext = hex2bin($parsed['data']);

            $tagLength = 16;
            $tag = substr($ciphertext, -$tagLength);
            $ciphertextWithoutTag = substr($ciphertext, 0, -$tagLength);

            $decrypted = openssl_decrypt(
                $ciphertextWithoutTag,
                'aes-128-gcm',
                $key,
                OPENSSL_RAW_DATA,
                $iv,
                $tag
            );

            if ($decrypted === false) {
                echo "❌ Decryption failed (integrity check failed).";
            } else {
                $page = $_GET['page'] == 'stb' ? 'stb' : 'sstb';
                $q = null;
                if (isset($_SESSION['Answered'])) {
                    $q = $_SESSION['q1'] == 1 ? 1 : 2;
                    if ($page == 'sstb' && $q == 1  && ($decrypted === 'pajak' || $decrypted === 'form')) {
                        return redirect()->back();
                    } else if ($page == 'stb' && $q == 2  && ($decrypted === 'pajak' || $decrypted === 'form')) {
                        return redirect()->back();
                    }
                } else {
                    if ($decrypted === 'pajak' || $decrypted === 'form') {
                        return redirect()->back();
                    }
                }
            }

            $pagee = $this->request->getGet('page');
            $tab = $decrypted;

            $jsondata = [
                'page' => $pagee,
                'tab' => $tab
            ];
        }

        if ($_GET['page'] == 'stb') {
            $sewaTitle = "Dashboard - Sewa Tanah dan Bangunan";
        } else {
            $sewaTitle = "Dashboard - Sewa Selain Tanah dan Bangunan";
        }

        $data = [
            'title' => $sewaTitle,
            'jsonData' => $jsondata
        ];

        return view('/dashboard/sewa/index3', $data);
    }

    public function sewaQuestion()
    {
        
        $data = $this->request->getPost(['q1']);

        if (! $this->validateData($data, [
            'q1' => 'required'
        ])) {
            session()->setFlashdata('errorQ', 'Mohon diisi semua pertanyaan nya');
            return redirect()->back();
        }

        $q1 = $this->request->getPost('q1');

        if ($q1 == 1){
            $data = $this->request->getPost(['q2', 'q3', 'q4', 'q5', 'q6', 'q7']);

            if (! $this->validateData($data, [
                'q2' => 'required',
                'q3' => 'required',
                'q7' => 'required'
            ])) {
                session()->setFlashdata('errorQ', 'Mohon diisi semua pertanyaan nya');
                return redirect()->back();
            }

            if ($this->request->getPost('q3') == 2) {
                if (! $this->validateData($data, [
                    'q2' => 'required',
                    'q3' => 'required',
                    'q4' => 'required',
                    'q5' => 'required',
                    'q7' => 'required'
                ])) {
                    session()->setFlashdata('errorQ', 'Mohon diisi semua pertanyaan nya');
                    return redirect()->back();
                }
            }

            if ($this->request->getPost('q5') == 1) {
                if (! $this->validateData($data, [
                    'q2' => 'required',
                    'q3' => 'required',
                    'q4' => 'required',
                    'q5' => 'required',
                    'q6' => 'required',
                    'q7' => 'required'
                ])) {
                    session()->setFlashdata('errorQ', 'Mohon diisi semua pertanyaan nya');
                    return redirect()->back();
                }
            }

            $data = $this->request->getPost(['q1', 'q2', 'q3', 'q4', 'q5', 'q6', 'q7']);
            session()->set($data);

        } else if ($q1 == 2){
            $data = $this->request->getPost(['q8', 'q9', 'q10', 'q11', 'q12', 'q13']);

            if (! $this->validateData($data, [
                'q8' => 'required',
                'q9' => 'required',
                'q13' => 'required'
            ])) {
                session()->setFlashdata('errorQ', 'Mohon diisi semua pertanyaan nya');
                return redirect()->back();
            }

            if ($this->request->getPost('q9') == 2) {
                if (! $this->validateData($data, [
                    'q8' => 'required',
                    'q9' => 'required',
                    'q10' => 'required',
                    'q11' => 'required',
                    'q13' => 'required'
                ])) {
                    session()->setFlashdata('errorQ', 'Mohon diisi semua pertanyaan nya');
                    return redirect()->back();
                }
            }

            if ($this->request->getPost('q11') == 1) {
                if (! $this->validateData($data, [
                    'q8' => 'required',
                    'q9' => 'required',
                    'q10' => 'required',
                    'q11' => 'required',
                    'q12' => 'required',
                    'q13' => 'required'
                ])) {
                    session()->setFlashdata('errorQ', 'Mohon diisi semua pertanyaan nya');
                    return redirect()->back();
                }
            }
            
            $data = $this->request->getPost(['q1', 'q8', 'q9', 'q10', 'q11', 'q12', 'q13']);
            session()->set($data);
            
        }

        $keyHex = '603deb1015ca71be2b73aef0857d7781';
        $tabb = 'syarat';
        $encrypted = $this->encryptDataGCM($tabb, $keyHex);

        session()->set(['Answered' => TRUE]);
        if ($this->request->getPost('q1') == 1) {
            return redirect()->to(base_url("dashboard/sewa?page=stb&tab={$encrypted}"));
        } else if ($this->request->getPost('q1') == 2) {
            return redirect()->to(base_url("dashboard/sewa?page=sstb&tab={$encrypted}"));
        }
    }

    function encryptDataGCM($plaintext, $keyHex) {
        // Convert hex key to binary
        $key = hex2bin($keyHex);

        // Generate a 12-byte IV
        $iv = random_bytes(12);

        // Encrypt data using AES-128-GCM
        $tagLength = 16;
        $cipher = 'aes-128-gcm';
        $tag = '';

        $ciphertext = openssl_encrypt(
            $plaintext,
            $cipher,
            $key,
            OPENSSL_RAW_DATA,
            $iv,
            $tag,
            '',
            $tagLength
        );

        if ($ciphertext === false) {
            throw new Exception('Encryption failed');
        }

        // Return JSON with hex iv and hex encrypted data (ciphertext + tag)
        $result = [
            'iv' => bin2hex($iv),
            'data' => bin2hex($ciphertext . $tag),
        ];

        return base64_encode(json_encode($result));
    }

    private function isLoggedIn(): bool
    {
        if (session()->get('logged_in')) {
            return true;
        }

        return false;
    }

    private function isAnswered(): bool
    {
        if(session()->get('Answered')){
            return true;
        }

        return false;
    }
}
