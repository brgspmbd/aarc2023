<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo base_url(); ?>assets/img/logo-aarc-2023.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style-business-forum.css">  
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Businesss Forum Registration</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-2">
                    <a href="index.html">
                        <img src="<?php echo base_url(); ?>assets/img/header-forum-bisnis.png" alt="" srcset="" class="jumbotron">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-2">
                    <div class="card-body">
                        <div class="card-title">
                            <h2>10th Road Engineering Asia Australasia Association Business Forum 2023</h2>
                        </div>
                        <div class="card-text">
                            <p>We are excited to invite you to join us at the upcoming event which will be held on: </p>
                            <p><b>Labuan Bajo, Indonesia - 25th August 2023</b></p>
                            <p>This forum will bring together professionals, government officials, and industry leaders from the road infrastructure sector to share knowledge and best practices in:</p>
                            <p><b><i>"Implementing Technology 4.0 for Sustainable Road infrastructure".</i></b></p>
                            <p>Take the opportunity to network with other industry leaders, learn about the latest developments in Technology 4.0, and gain insights into best practices for implementing sustainable road infrastructure projects.</p>
                            <p>To join this event, please complete the form bellow.</p>
                            <br>
                            <p>See you at Labuan Bajo!</p>
                            <br>
                            <p><i>Contact Person: WhatsApp number +62 856 944 30 656</i></p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card mt-3 mb-3">
                        <div class="card-body">
                            <!-- <h5 class="card-title">Form Bootstrap 5</h5> -->
                            <form id="form_paper">
                                <div class="mb-3 mt-4">
                                    <h6>Full Name</h6>
                                    <label for="full_name" class="form-label">(and academic degree if necessary)</label>
                                    <input type="text" class="form-control" name="full_name" id="full_name" placeholder="Enter your full name" required>
                                    <input type="hidden" class="form-control" value="<?php echo $data_user->id?>"  id="id_user" name="id_user" required>
                                </div>
                                <div class="mb-3 mt-4">
                                    <h6>Salutation</h6>
                                    <select class="form-select" name="salutation" id="salutation" required>
                                        <option value="">-</option>
                                        <option value="Prof.">Prof.</option>
                                        <option value="Dr.">Dr.</option>
                                        <option value="Mr.">Mr.</option>
                                        <option value="Ms.">Ms.</option>
                                    </select>
                                </div>
                                <div class="mb-3 mt-4">
                                    <h6>Email</h6>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
                                </div>

                                <div class="mb-3 mt-4">
                                    <h6>Country</h6>
                                    <input type="text" class="form-control" name="country" id="country" placeholder="Enter your country" required>
                                </div>
                                <div class="mb-3 mt-4">
                                    <h6>Company/Organization Name</h6>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="company" id="company1" value="Directorate General of Highways, Ministry of Public Works and Housing (MPWH)" required>
                                        <label class="form-check-label" for="company1">Directorate General of Highways, Ministry of Public Works and Housing (MPWH)</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="company" id="company2" value="World Road Association (PIARC)" required>
                                        <label class="form-check-label" for="company2">World Road Association (PIARC)</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="company" id="company3" value="Road Engineering Association of Asia and Australasia (REAAA)" required>
                                        <label class="form-check-label" for="company3">Road Engineering Association of Asia and Australasia (REAAA)</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="company" id="company4" value="Indonesian Road Development Association (HPJI)" required>
                                        <label class="form-check-label" for="company4">Indonesian Road Development Association (HPJI)</label>
                                    </div>
                                </div>
                                <div class="mb-3 mt-4">
                                    <h6>Position</h6>
                                    <input type="text" class="form-control" name="position" id="position" placeholder="Enter your position" required>
                                </div>
                                <div class="mb-3 mt-4">
                                    <h6>Salutation</h6>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="salutation2" id="salutation21" value="Mr" required>
                                        <label class="form-check-label" for="salutation21">Mr</label>
                                    </div>
                                    <br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="salutation2" id="salutation22" value="Mrs" required>
                                        <label class="form-check-label" for="salutation22">Mrs</label>
                                    </div>
                                </div>
                                <div class="mb-3 mt-4">
                                    <h6>WhatsApp Number</h6>
                                    <input type="tel" class="form-control" name="whatsappnumber" id="whatsappnumber" placeholder="Enter your Whatsapp number. Ex +6285956468350" required>
                                </div>
                                <div class="mb-3 mt-4">
                                    <h6>Upload your Filled RSVP Form and Payment Proof Here</h6>
                                    <label for="file" class="form-label">(Details are provided in <a href="https://linktr.ee/reaaa_bf" target="_blank">https://linktr.ee/reaaa_bf</a>)</label>
                                    <input type="file" class="form-control" name="bank_upload" id="bank_upload" accept=".jpg,.jpeg,.png" required>
                                </div>
                                
                                <div class="row justify-content-center">
                                    <button type="button" class="btn btn-success col-3" id="submitBtn">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        
    <script>
        // Navigation logic for the form
        
        $(document).ready(function(){
            $.ajax({
                type: "POST",
                url: '<?php echo base_url(); ?>Business_forum/get_data_business',
                data: {
                    user_id: '<?php echo $data_user->id?>'
                },
                dataType: "json",
                success:function(data){        
					$('#full_name').val(data[0].full_name);
					$('#id_user').val(data[0].id_user);
					$('#email').val(data[0].email);
					$('#country').val(data[0].country);
					$('#salutation').val(data[0].salutation).change();
					$('#salutation2').val(data[0].salutation2).change();
					$('#position').val(data[0].position);
					$('#whatsappnumber').val(data[0].whatsappnumber).change();
                    if(data[0].salutation2 =='Mr'){
                        document.getElementById("salutation21").click();
                    }else if(data[0].salutation2 =='Mrs'){
                        document.getElementById("salutation22").click();
                    }
                    if(data[0].company =='Directorate General of Highways, Ministry of Public Works and Housing (MPWH)'){
                        document.getElementById("company1").click();
                    }else if(data[0].company =='World Road Association (PIARC)'){
                        document.getElementById("company2").click();
                    }else if(data[0].company =='Road Engineering Association of Asia and Australasia (REAAA)'){
                        document.getElementById("company3").click();
                    }else if(data[0].company =='Indonesian Road Development Association (HPJI)'){
                        document.getElementById("company4").click();
                    }else{
                        document.getElementById("company5").click();
                        $("#companytext").val('<?php if(!empty($data_user->organization)){echo $data_user->organization;}?>');
                    }
                            
                }
            });
            $('#close').click(function(e){
                location.href='<?php echo base_url(); ?>splitmenu';
            });
            $('#submitBtn').click(function(e){
            });
            $('#submitBtn').click(function(e){
                // if( $('#bank_upload').val()!== ''){

                
                var formData = new FormData($('#form_paper')[0]);
                $("#form_paper").validate({
                    rules: {
                        full_name: 'required',
                        bank_upload: 'required',
                        full_name: 'required',
                        full_name: 'required',
                    },
                    comment: {
                        required: true
                    },
                    messages: {
                    },
                }).form();
                if ($("#form_paper").valid()) {
                    $.ajax({
                        type: "POST",
                        url: '<?php echo base_url(); ?>Business_forum/insert_form',
                        method		: "POST",
                        data			: formData,
                        dataType		: "JSON",
                        processData	: false,
                        contentType	: false,
                        cache			: false,
                        async			: false,
                        success:function(data){        
							if (data == "success") {
                                Swal.fire({
                                    icon: 'success',
                                    confirmButtonColor: "#42ba96",
                                    text: "Submit Business Forum success",
                                    type: "success"
                                }).then(function() {
                                    location.href='<?php echo base_url(); ?>splitmenu';
                                });
                            }
                        }
                    });
                // }
                }
            });
        });
    </script>
</body>

</html>