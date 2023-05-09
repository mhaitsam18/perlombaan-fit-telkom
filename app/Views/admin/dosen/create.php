<?= $this->extend('layouts/admin') ?>


<?= $this->section('style') ?>
<!-- Plugin css for this page -->
<link rel="stylesheet" href="/assets-nobleui/vendors/jquery-steps/jquery.steps.css">
<!-- End plugin css for this page -->
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <div>
        <h4 class="mb-3 mb-md-0"><?= $title ?></h4>
    </div>
    <div class="d-flex align-items-center flex-wrap text-nowrap">

    </div>
</div>


<div class="row">
    <div class="col-lg-12 col-xl-12 stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                    <h6 class="card-title mb-0">Ubah data Dosen</h6>
                </div>
                <div class="page-content">

                    <nav class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Forms</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Wizard</li>
                        </ol>
                    </nav>

                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Horizontal wizard</h4>
                                    <p class="text-muted mb-3">Read the <a href="http://www.jquery-steps.com/GettingStarted" target="_blank"> Official jQuery Steps Documentation </a>for a full list of instructions and other options.</p>
                                    <div id="wizard">
                                        <h2>First Step</h2>
                                        <section>
                                            <h4>First Step</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ut nulla nunc. Maecenas arcu sem, hendrerit a tempor quis,
                                                sagittis accumsan tellus. In hac habitasse platea dictumst. Donec a semper dui. Nunc eget quam libero. Nam at felis metus.
                                                Nam tellus dolor, tristique ac tempus nec, iaculis quis nisi.</p>
                                        </section>

                                        <h2>Second Step</h2>
                                        <section>
                                            <h4>Second Step</h4>
                                            <p>Donec mi sapien, hendrerit nec egestas a, rutrum vitae dolor. Nullam venenatis diam ac ligula elementum pellentesque.
                                                In lobortis sollicitudin felis non eleifend. Morbi tristique tellus est, sed tempor elit. Morbi varius, nulla quis condimentum
                                                dictum, nisi elit condimentum magna, nec venenatis urna quam in nisi. Integer hendrerit sapien a diam adipiscing consectetur.
                                                In euismod augue ullamcorper leo dignissim quis elementum arcu porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Vestibulum leo velit, blandit ac tempor nec, ultrices id diam. Donec metus lacus, rhoncus sagittis iaculis nec, malesuada a diam.
                                                Donec non pulvinar urna. Aliquam id velit lacus.</p>
                                        </section>

                                        <h2>Third Step</h2>
                                        <section>
                                            <h4>Third Step</h4>
                                            <p>Morbi ornare tellus at elit ultrices id dignissim lorem elementum. Sed eget nisl at justo condimentum dapibus. Fusce eros justo,
                                                pellentesque non euismod ac, rutrum sed quam. Ut non mi tortor. Vestibulum eleifend varius ullamcorper. Aliquam erat volutpat.
                                                Donec diam massa, porta vel dictum sit amet, iaculis ac massa. Sed elementum dui commodo lectus sollicitudin in auctor mauris
                                                venenatis.</p>
                                        </section>

                                        <h2>Fourth Step</h2>
                                        <section>
                                            <h4>Fourth Step</h4>
                                            <p>Quisque at sem turpis, id sagittis diam. Suspendisse malesuada eros posuere mauris vehicula vulputate. Aliquam sed sem tortor.
                                                Quisque sed felis ut mauris feugiat iaculis nec ac lectus. Sed consequat vestibulum purus, imperdiet varius est pellentesque vitae.
                                                Suspendisse consequat cursus eros, vitae tempus enim euismod non. Nullam ut commodo tortor.</p>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Vertical Wizard</h4>
                                    <div id="wizardVertical">
                                        <h2>First Step</h2>
                                        <section>
                                            <h4>First Step</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ut nulla nunc. Maecenas arcu sem, hendrerit a tempor quis,
                                                sagittis accumsan tellus. In hac habitasse platea dictumst. Donec a semper dui. Nunc eget quam libero. Nam at felis metus.
                                                Nam tellus dolor, tristique ac tempus nec, iaculis quis nisi.</p>
                                        </section>

                                        <h2>Second Step</h2>
                                        <section>
                                            <h4>Second Step</h4>
                                            <p>Donec mi sapien, hendrerit nec egestas a, rutrum vitae dolor. Nullam venenatis diam ac ligula elementum pellentesque.
                                                In lobortis sollicitudin felis non eleifend. Morbi tristique tellus est, sed tempor elit. Morbi varius, nulla quis condimentum
                                                dictum, nisi elit condimentum magna, nec venenatis urna quam in nisi. Integer hendrerit sapien a diam adipiscing consectetur.
                                                In euismod augue ullamcorper leo dignissim quis elementum arcu porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Vestibulum leo velit, blandit ac tempor nec, ultrices id diam. Donec metus lacus, rhoncus sagittis iaculis nec, malesuada a diam.
                                                Donec non pulvinar urna. Aliquam id velit lacus.</p>
                                        </section>

                                        <h2>Third Step</h2>
                                        <section>
                                            <h4>Third Step</h4>
                                            <p>Morbi ornare tellus at elit ultrices id dignissim lorem elementum. Sed eget nisl at justo condimentum dapibus. Fusce eros justo,
                                                pellentesque non euismod ac, rutrum sed quam. Ut non mi tortor. Vestibulum eleifend varius ullamcorper. Aliquam erat volutpat.
                                                Donec diam massa, porta vel dictum sit amet, iaculis ac massa. Sed elementum dui commodo lectus sollicitudin in auctor mauris
                                                venenatis.</p>
                                        </section>

                                        <h2>Fourth Step</h2>
                                        <section>
                                            <h4>Fourth Step</h4>
                                            <p>Quisque at sem turpis, id sagittis diam. Suspendisse malesuada eros posuere mauris vehicula vulputate. Aliquam sed sem tortor.
                                                Quisque sed felis ut mauris feugiat iaculis nec ac lectus. Sed consequat vestibulum purus, imperdiet varius est pellentesque vitae.
                                                Suspendisse consequat cursus eros, vitae tempus enim euismod non. Nullam ut commodo tortor.</p>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <form action="/" method="post" class="forms-sample">
                    <?= csrf_field() ?>
                    <input type="hidden" name="_method" value="put">
                    <div class="mb-3">
                        <label for="exampleInputUsername1" class="form-label">Username</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off" placeholder="Username">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputUsername1" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off" placeholder="Username">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" autocomplete="off" placeholder="Password">
                    </div>
                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">
                            Remember me
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-secondary">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div> <!-- row -->


<?= $this->endSection() ?>

<?= $this->section('script') ?>
<!-- Plugin js for this page -->
<script src="/assets-nobleui/vendors/jquery-steps/jquery.steps.min.js"></script>
<!-- End plugin js for this page -->

<script src="/assets-nobleui/js/wizard.js"></script>
<?= $this->endSection() ?>