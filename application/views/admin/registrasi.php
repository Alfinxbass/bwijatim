    <div class="container">
        
        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-5 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-4">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Registrasi Akun</h1>
                            </div>
                            
                            <form action="<?= base_url('admin/registrasi'); ?>" class="user" method="post">
                                <div class="form-group">
                                    <input type="username" class="form-control form-control-user" id="username" name="username" placeholder="Username">
                                        <?= form_error('username', '<span class="text-danger small pl-3">', '</span>')?>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="email" name="email"
                                        placeholder="Email">
                                        <?= form_error('email', '<span class="text-danger small pl-3">', '</span>')?>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                        <?= form_error('password', '<span class="text-danger small pl-3">', '</span>')?>
                                </div>
                                
                                <button type="submit" class="btn btn-success btn-user btn-block">
                                    Registrasi Akun
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small text-success" href="<?= base_url('admin'); ?>">Sudah Punya Akun? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    