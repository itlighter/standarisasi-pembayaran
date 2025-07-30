<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<div class="container d-flex position-relative mt-5 bg-image">
    <div class="border border-1 rounded-4 border-primary" style="width: 400px; height: 545px;">
        <img src="<?= base_url('image/Picture4.png') ?>" alt="gambar" id="login-sm-img" class="text-center">
        <h3 class="text-center" style="margin-top: 80px; margin-bottom: 40px; color: gray;">Login</h3>
        <?php if (session()->getFlashdata('success')) : ?>
            <div class="alert alert-success">
                <?php echo session()->getFlashdata('success'); ?>
            </div>
        <?php endif; ?>
        <?php if (session()->getFlashdata('error')) : ?>
            <div class="alert alert-danger mw-100 mx-2">
                <?php echo session()->getFlashdata('error'); ?>
            </div>
        <?php endif; ?>

        <?= validation_list_errors() ?>

        <?= form_open('login'); ?>
        <div class="form-group">
            <label for="user" class="text-nowrap text-primary ms-4">User LDAP</label><br>
            <input type="text" name="username" class="form-control bg-info border border-0 w-75 mb-3 ms-4" required><br>
        </div>
        <div class="form-group position-relative">
            <label for="password" class="text-primary ms-4">Password LDAP</label>
            <input type="password" name="password" class="form-control bg-info border border-0 w-75 ms-4" id="password"><br>
            <i class="fa-solid fa-eye position-absolute top-50 end-0 translate-middle-y me-5 invisible" id="togglePassword" style="cursor: pointer;"></i>
        </div>
        <div class="form-group">
            <button class="border-0 text-center w-50 bg-secondary" style="margin-top: 50px; margin-left: 25%">Selanjutnya</button>
        </div>
        <?= form_close(); ?>
    </div>
</div>
<div class="fixed-bottom bg-primary mx-3 mb-1" style="height: 30px;"></div>
<script>
    $(document).ready(function () {
        // Toggle password visibility
        $('#togglePassword').on('click', function () {
            const input = $('#password');
            const type = input.attr('type') === 'password' ? 'text' : 'password';
            input.attr('type', type);
            $(this).toggleClass('fa-eye-slash');
            $(this).toggleClass('fa-eye');
        });

        // Show/hide icon based on input length
        $('#password').on('input', function () {
            if ($(this).val().length > 0) {
                $("#togglePassword").addClass("visible");
                $("#togglePassword").removeClass("invisible");
            } else {
                $("#togglePassword").removeClass("visible");
                $("#togglePassword").addClass("invisible");
            }
        });
    });
</script>
<?= $this->endSection() ?>