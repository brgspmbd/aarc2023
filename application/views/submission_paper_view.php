<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full Paper Submission - AARC 2023</title>
    <link rel="icon" href="<?php echo base_url(); ?>assets/img/logo-aarc-2023.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style-fullpaper.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="container mt-5">
        <img src="<?php echo base_url(); ?>assets/img/jumbotron.jpg" alt="" srcset="" class="jumbotron">
    </div>
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <div class="card-title mb-5 mt-5">
                    <h1 class="text-center">Full Paper Submission</h1>
                </div>
                <div class="row m-auto">
                    <div class="mx-auto">
                        <form id="form_paper">
                            <!-- Tab 1 -->
                            <div class="tab">
                                <h4 class="mb-4">Author Information</h4>
                                <div class="mb-3">
                                    <label for="paper_id" class="form-label">Paper ID</label>
                                    <input type="text" class="form-control"  id="paper_id" name="paper_id" placeholder="Example: A-04" required>
                                    <input type="hidden" class="form-control" value="<?php echo $data_user->id?>"  id="id_user" name="id_user" required>
                                </div>
                                <div class="mb-3">
                                    <label for="corresponding_author" class="form-label">Corresponding Author Full Name</label>
                                    <input type="text" class="form-control"  id="corresponding_author" name="corresponding_author" required>
                                </div>
                                <div class="mb-3">
                                    <label for="date_of_birth" class="form-label">Date of Birth</label>
                                    <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" required>
                                </div>
                                <div class="mb-3">
                                    <label for="origin_country" class="form-label">Origin Country</label>
                                    <input type="text" class="form-control"  id="origin_country" name="origin_country" required>
                                </div>
                                <div class="mb-3">
                                    <label for="institution" class="form-label">Institution</label>
                                    <input type="text" class="form-control"  id="institution" name="institution" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control"  id="email" name="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="alternative_email" class="form-label">Alternative Email</label>
                                    <input type="email" class="form-control"  id="alternative_email" name="alternative_email">
                                </div>
                                <div class="mb-3">
                                    <label for="phone_number" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" id="phone_number" name="phone_number" required>
                                </div>
                                <div class="mb-3">
                                    <label for="present_at_the_venue" class="form-label">Can the author be present at the venue?</label>
                                    <select class="form-select" id="present_at_the_venue" name="present_at_the_venue" required>
                                        <option value="">Select an option</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Tab 2 -->
                            <div class="tab">
                                <h4 class="mb-4 mt-5">Paper Details</h4>
                                <div class="mb-3">
                                    <label for="paper_tittle" class="form-label">Paper Title</label>
                                    <input type="text" class="form-control" id="paper_tittle" name="paper_tittle" required>
                                </div>
                                <div class="mb-3">
                                    <label for="first_author_name" class="form-label">First Author Name</label>
                                    <input type="text" class="form-control" id="first_author_name" name="first_author_name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="first_author_institution" class="form-label">First Author Institution</label>
                                    <input type="text" class="form-control" id="first_author_institution" name="first_author_institution" required>
                                </div>
                                <div class="mb-3">
                                    <label for="additional_author_name" class="form-label">Additional Authors (Separated by comma [,])</label>
                                    <input type="text" class="form-control" id="additional_author_name" name="additional_author_name">
                                </div>
                                <div class="mb-3">
                                    <label for="additional_author_institution" class="form-label">Additional Authors Institutions (Separated by comma [,])</label>
                                    <input type="text" class="form-control" id="additional_author_institution" name="additional_author_institution">
                                </div>
                                <div class="mb-3">
                                    <label for="fullPaperUpload" class="form-label">Full Paper Upload (PDF)</label>
                                    <input type="file" class="form-control" id="fullPaperUpload" name="full_paper_upload" accept=".pdf" required>
                                </div>
                            </div>

                            <!-- Navigation -->
                            
                            <div class="row justify-content-center">
                                <div class="text-center mb-5">
                                    <button type="button" class="btn btn-primary col-3" id="prevBtn" onclick="navigateTab(-1)" style="display: none;">Previous</button>
                                    <button type="button" class="btn btn-primary col-3" id="nextBtn" onclick="navigateTab(1)">Next</button>
                                    <button type="button" class="btn btn-success col-3" id="submitBtn" style="display: none;">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Navigation logic for the form
        var currentTab = 0;
        var tabs = document.getElementsByClassName("tab");

        function navigateTab(n) {
            // Hide the current tab
            tabs[currentTab].style.display = "none";

            // Update currentTab value
            currentTab = currentTab + n;

            // Show or hide buttons based on the current tab
            if (currentTab === 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }

            if (currentTab === tabs.length - 1) {
                document.getElementById("nextBtn").style.display = "none";
                document.getElementById("submitBtn").style.display = "inline";
            } else {
                document.getElementById("nextBtn").style.display = "inline";
                document.getElementById("submitBtn").style.display = "none";
            }

            // Display the new tab
            tabs[currentTab].style.display = "block";
        }
        
        $(document).ready(function(){
            $.ajax({
                type: "POST",
                url: '<?php echo base_url(); ?>submission_paper/get_data_paper',
                data: {
                    user_id: '<?php echo $data_user->id?>'
                },
                dataType: "json",
                success:function(data){        
					$('#paper_id').val(data[0].paper_id);
					$('#id_user').val(data[0].id_user);
					$('#corresponding_author').val(data[0].corresponding_author);
					$('#date_of_birth').val(data[0].date_of_birth);
					$('#origin_country').val(data[0].origin_country);
					$('#institution').val(data[0].institution);
					$('#email').val(data[0].email);
					$('#alternative_email').val(data[0].alternative_email);
					$('#phone_number').val(data[0].phone_number);
					$('#present_at_the_venue').val(data[0].present_at_the_venue).change();
					$('#paper_tittle').val(data[0].paper_tittle);
					$('#first_author_name').val(data[0].first_author_name);
					$('#first_author_institution').val(data[0].first_author_institution);
					$('#additional_author_name').val(data[0].additional_author_name);
					$('#additional_author_institution').val(data[0].additional_author_institution);
                }
            });
            $('#close').click(function(e){
                location.href='<?php echo base_url(); ?>splitmenu';
            });
            tabs[1].style.display = "none";
            $('#submitBtn').click(function(e){
				var formData = new FormData($('#form_paper')[0]);
                $("#form_paper").validate({
                    rules: {
                        paper_id: 'required',
                        id_user: 'required',
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
                        url: '<?php echo base_url(); ?>submission_paper/insert',
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
                                    text: "Submit Submission Paper success",
                                    type: "success"
                                }).then(function() {
                                    location.href='<?php echo base_url(); ?>splitmenu';
                                });
                            }
                        }
                    });
                }
            });
        });
    </script>
</body>

</html>