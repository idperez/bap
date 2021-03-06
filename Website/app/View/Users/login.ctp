<div class="fh5co-hero">
    <div class="fh5co-overlay"></div>
        <div class="fh5co-cover text-center" style="background-image: url(./../app/webroot/img/wp-carey-building.jpg); ">
            <div class="desc animate-box" style="position:relative; top:300px; ">            
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-4"> 
                            <form role="form" action="" method="post" enctype="multipart/form-data" style=" margin: 0 auto; width:80%;">
                                <div class="form-group col-md-6 ">
                                    <?php
                                    echo $this->Form->create('User');
                                    echo $this->Form->input('username', array(
                                        'type' => 'email',
                                        'class' => 'form-control',
                                        'maxlength' => 50,
                                        'placeholder' => 'example@asu.edu',
                                        'name' => 'username')
                                    );                                    
                                    echo $this->Form->input('password', array(
                                        'type' => 'password',
                                        'class' => 'form-control',
                                        'maxlength' => 30,
                                        'placeholder' => 'Password',
                                        'name' => 'password')
                                    );                                    
                                    echo $this->Form->end(array('label' => 'Log in', 
                                        'class' => 'btn btn-primary', 
                                        'name' => 'submit',
                                        'style' => 'margin-top:10px;')
                                    );
                                    ?>  
                                    <div style="position:relative; top:-10px;">
                                    <br><a onclick="window.location.href='<?php echo Router::url(array('controller'=>'Users', 'action'=>'forgot_password'))?>'" style="cursor: pointer;">Forgot Password</a></p>
                                    </div>
                                </div>                     
                            </form>      
                        </div>
                    </div>                      
                </div>
            </div>
        </div>
    </div>
</div>
