<div class="row">
    <div class="col-md-6">
        <div class="white-box">
            <h3 class="box-title m-b-0">Sample Forms with icon</h3>
            <p class="text-muted m-b-30 font-13"> Bootstrap Elements </p>
            <a href="<?php echo site_url('menu/submenu') ?>"><i class="fa fa-arrow-left"></i> Back</a>

            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <form action="<?php base_url('menu/update') ?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $sm->id ?>" />
                        <div class="form-group">
                            <label for="exampleInputuname">title</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-gift"></i></div>
                                <input class="form-control <?php echo form_error('title') ? 'is-invalid' : '' ?>" type="text" name="title" placeholder="Product name" value="<?php echo $sm->title ?>">
                                <div class="invalid-feedback">
                                    <?php echo form_error('name') ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">menu</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-money"></i></div>
                                <input class="form-control <?php echo form_error('menu') ? 'is-invalid' : '' ?>" type="number" name="menu" min="0" placeholder="Product price" value="<?php echo $sm->menu ?>">
                                <div class="invalid-feedback">
                                    <?php echo form_error('price') ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputpwd1">url</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-image"></i></div>
                                <input class="form-control-file <?php echo form_error('url') ? 'is-invalid' : '' ?>" type="file" name="url" value="<?php echo $sm->url ?>">
                                <div class="invalid-feedback">
                                    <?php echo form_error('image') ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputpwd2">icon</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-notepad"></i></div>
                                <textarea class="form-control <?php echo form_error('icon') ? 'is-invalid' : '' ?>" name="icon" placeholder="Product description..."><?php echo $product->icon ?></textarea>
                                <div class="invalid-feedback">
                                    <?php echo form_error('description') ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputpwd1">is_active</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-image"></i></div>
                                <input class="form-control-file <?php echo form_error('is_active') ? 'is-invalid' : '' ?>" type="file" name="is_active" value="<?php echo $sm->is_active ?>">
                                <div class="invalid-feedback">
                                    <?php echo form_error('image') ?>
                                </div>
                            </div>
                        </div>

                        <!-- <button type="submit" class="btn btn-success waves-effect waves-light m-r-10" name="submit" value="Save">Submit</button>
                                <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button> -->
                        <input class="btn btn-success" type="submit" name="btn" value="Save" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>