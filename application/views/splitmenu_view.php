<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="<?php echo base_url(); ?>assets/img/logo-aarc-2023.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo base_url(); ?>assets/img/logo-aarc-2023.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style-login.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/qrcode.js"></script>
    <script src="https://kit.fontawesome.com/88035d876c.js" crossorigin="anonymous"></script>
    <title>AARC 2023</title>
</head>

<body>
    <div class="login-container mb-3">
        <div class="login-form">
            <div class="login-logo">
                <a href="">
                    <img src="<?php echo base_url(); ?>assets/img/logo-aarc-2023.png" alt="Logo"></a>
            </div>
            <a href="<?php echo base_url(); ?>registration" class="btn btn-primary register-button p-3"><span><i class="fa-solid fa-user"></i></span>&nbsp;<b>Form Registration</b></a>
            <hr>
            <?php if( $this->session->userdata('haveaccount', TRUE)) {?>
                <a href="<?php echo base_url(); ?>business_forum" class="btn btn-info register-button p-3"><span><i class="fa-solid fa-file"></i></span>&nbsp;<b>Business Forum</b></a>
                <hr>
                <a href="<?php echo base_url(); ?>submission_paper" class="btn btn-warning register-button p-3"><span><i class="fa-solid fa-file"></i></span>&nbsp;<b>Full Paper Submission</b></a>
            <?php }else{?>
                <button type="button" class="btn btn-info register-button p-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><span><i class="fa-solid fa-file"></i></span>&nbsp;<b> Business Forum</b></button>
                <hr>
                <button type="button" class="btn btn-warning register-button p-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><span><i class="fa-solid fa-file"></i></span>&nbsp;<b> Full Paper Submission</b></button>
            <?php }?>
            <hr>
            <div class="complete">
                <a href="http://ferdyfebriyanto.my.id/nota.html" class="btn btn-warning register-button p-3"><span><i class="fa-solid fa-file"></i></span>&nbsp;<b>Download Invoice</b></a>
                <hr>
                <button type="button" class="btn btn-info register-button p-3" id="check_invitation"><span><i class="fa-solid fa-file"></i></span>&nbsp;<b> Invitation</b></button>
                <hr>
                
            </div>
                
            <div class="row justify-content-center">
                <a href="<?php echo base_url(); ?>landingpage" class="btn btn-success  col-5"><span><i class="fa-solid fa-home"></i></span>&nbsp;<b>Landing Page</b></a>
                <div class="col-2"></div>
                <a href="<?php echo base_url(); ?>login/logout" class="btn btn-danger  col-5"><span><i class="fa-solid fa-sign-out"></i></span>&nbsp;<b>Logout</b></a>
            </div>
        </div>
    </div>
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel"></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Input your registration for the paper submission.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="modalinvitation" tabindex="-1" aria-labelledby="modalinvitationLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content undangan">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalinvitationLabel">Invitation Card</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center mb-4">
                        <img src="assets/img/logo-aarc-2023.png" alt="logo" width="200px" class="mb-2">
                        <h5>Advance Technology Implementation Towards Sustainable Road Development</h5>
                    </div>
                    <div class="row mb-3">
                        <center>
                            <div id="qrcode" class="text-center mb-3" style="width:100px; height:100px; margin-top:15px;"></div>
                        </center>
                        <!--<img src="assets/img/qrcode-dummy.png" alt="logo" width="150px">-->
                    </div>
                    <div class="text-center mb-3">
                        <p>Invitation to attend the International Conference on <br> Asia Australasia Road Conference (AARC) 2023</p>
                        <h5 id="nama_modal"></h5><hr>
                        <h5 id="country_modal">Country</h5><hr>
                        <h5 id="organization_modal">Organization</h5><hr>
                        <h5 id="workunit_modal">Work Unit</h5>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>

      var qrcode = new QRCode(document.getElementById("qrcode"), {
          width : 50,
          height : 50,
          useSVG: true
      });
    
      function makeCode (email) {	
          qrcode.makeCode(email);
      }
    

        $(document).ready(function(){
            $( "#check_invitation" ).on( "click", function() {
                $.ajax({
                    type: "POST",
                    url: '<?php echo base_url(); ?>splitmenu/cekuser',
                    data: '',
                    dataType: "json",
                    success:function(data){        
    					if (data == "kosong") {
                            Swal.fire({
                                icon: 'info',
                                confirmButtonColor: "#42ba96",
                                text: "If you have not registered yet, you can fill out the registration form first.",
                            
                            }).then(function() {
                            });
                            $(".complete").hide();
                        }else{
                            if(data[0].status_approved =="pending"){
                                Swal.fire({
                                    icon: 'info',
                                    confirmButtonColor: "#42ba96",
                                    text: "Welcome "+data[0].full_name + ", Wait confirmation for download invoice and invitation",
                                
                                }).then(function() {
                                });
                                $(".complete").hide();
                            }else{
                                $("#nama_modal").html(data[0].title +" - "+data[0].full_name);
                                $("#country_modal").html(data[0].country);
                                $("#organization_modal").html(data[0].organization);
                                $("#workunit_modal").html(data[0].workunit);
                                makeCode(data[0].email);
                                $("#modalinvitation").modal('show');
                            }
                        }
                    }
                });
            } );
            $(".complete").hide();
            $.ajax({
                type: "POST",
                url: '<?php echo base_url(); ?>splitmenu/cekuser',
                data: '',
                dataType: "json",
                success:function(data){        
					if (data == "kosong") {
                        Swal.fire({
                            icon: 'info',
                            confirmButtonColor: "#42ba96",
                            text: "If you have not registered yet, you can fill out the registration form first.",
                        
                        }).then(function() {
                        });
                        $(".complete").hide();
                    }else{
                        if(data[0].status_approved =="pending"){
                            Swal.fire({
                                icon: 'info',
                                confirmButtonColor: "#42ba96",
                                text: "Welcome "+data[0].full_name + ", Wait confirmation for download invoice and invitation. Complete your submusion paper",
                            
                            }).then(function() {
                            });
                            $(".complete").hide();
                        }else{
                            $(".complete").show();
                            Swal.fire({
                                icon: 'info',
                                confirmButtonColor: "#42ba96",
                                text: "Welcome "+data[0].full_name + ", Your Registration is complete, You can check Invitation and Invoice.",
                            
                            }).then(function() {
                            });
                            
                        }
                    }
                }
            });
        });
    </script>
</body>

</html>