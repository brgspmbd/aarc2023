<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo base_url(); ?>assets/img/logo-aarc-2023.png">
    <title>Form Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style-registration.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<style>
    .polaroid {
        width: 300px;
        border: 2px dashed rgba(255, 255, 255, 0.7);
        padding: 1rem;
        position: relative;
	}
   
</style>
<body>
    <div class="container mt-5">
        <img src="<?php echo base_url(); ?>assets/img/jumbotron.jpg" alt="" srcset="" class="jumbotron">
    </div>
    <div class="container mb-3">
        <div class="card">
            <div class="card-body">
                <div class="card-title mb-3">
                    <h2>Form Registration</h2>
                </div>
                <ul class="nav nav-pills mb-3" id="formTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="personal-tab" data-bs-toggle="pill" data-bs-target="#personal" type="button" role="tab" aria-controls="personal" aria-selected="true">Personal</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="workunit-tab" data-bs-toggle="pill" data-bs-target="#workunit" type="button" role="tab" aria-controls="workunit" aria-selected="false">HPJI</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="attendance-tab" data-bs-toggle="pill" data-bs-target="#attendance" type="button" role="tab" aria-controls="attendance" aria-selected="false">Type of Attendance</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="upload-tab" data-bs-toggle="pill" data-bs-target="#upload" type="button" role="tab" aria-controls="upload" aria-selected="false">Upload Image</button>
                    </li>
                </ul>
                <div class="tab-content" id="formContent">
                    <div class="tab-pane fade show active" id="personal" role="tabpanel" aria-labelledby="personal-tab">
                        <form id='form1'>
                            <div class="mb-3">
                                <label for="email" class="form-label"><h5>Email</h5></label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" value="<?php echo $this->session->userdata('email'); ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="title" class="form-label"><h5>Title</h5></label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="title" id="mr" value="Mr.">
                                    <label class="form-check-label" for="title1">Mr.</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="title" id="mrs" value="Mrs.">
                                    <label class="form-check-label" for="title2">Mrs.</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="title" id="ms" value="Ms.">
                                    <label class="form-check-label" for="title3">Ms.</label>
                                </div>
                                <!-- Add more radio options here -->
                            </div>

                            <div class="mb-3">
                                <label for="fullname" class="form-label"><h5>Full Name</h5></label>
                                <input type="text" class="form-control" name="fullname" id="fullname" value="<?php if(!empty($data_user->full_name)){echo $data_user->full_name;} ?>" placeholder="Please fill your full name (and academic degree if necessary)" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label"><h5>Phone Number</h5></label>
                                <input type="tel" class="form-control" name="phone" id="phone" value="<?php if(!empty($data_user->phone_number)){echo $data_user->phone_number;}?>" placeholder="Please fill your country code" required>
                            </div>
                            <div class="mb-3">
                                <label for="country" class="form-label"><h5>Country</h5></label>
                                <input type="text" class="form-control" name="country" id="country" value="<?php if(!empty($data_user->country)){echo $data_user->country;}?>" placeholder="Enter your country" required>
                            </div>

                            <div class="mb-3">
                                <label for="organization" class="form-label"><h5>Organization</h5></label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="organization" id="organization1" value="Directorate General of Highways, Ministry of Public Works and Housing (MPWH)">
                                    <label class="form-check-label" for="organization1">Directorate General of Highways, Ministry of Public Works and Housing (MPWH)</label>
                                </div>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="organization" id="organization2" value="World Road Association (PIARC)">
                                    <label class="form-check-label" for="organization2">World Road Association (PIARC)</label>
                                </div>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="organization" id="organization3" value="Road Engineering Association of Asia and Australasia (REAAA)">
                                    <label class="form-check-label" for="organization3">Road Engineering Association of Asia and Australasia (REAAA)</label>
                                </div>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="organization" id="organization4" value="Indonesian Road Development Association (HPJI)">
                                    <label class="form-check-label" for="organization4">Indonesian Road Development Association (HPJI)</label>
                                </div>
                                <br>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="organization" id="organization5" value="option2">
                                    <label class="form-check-label" for="organization5">
                                        Yang lain:
                                    </label>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="organizationtext" id="organizationtext" placeholder="Enter your text" >
                                </div>

                                <!-- Add more radio options here -->
                            </div>
                            <div class="row justify-content-center">
                                <button type="button" class="btn btn-primary col-3" id="btn-next1">Next</button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="workunit" role="tabpanel" aria-labelledby="workunit-tab">
                        <form id='form2'>
                            <div class="mb-5">
                                <h4>INDONESIAN ROAD DEVELOPMENT ASSOCIATION (HPJI)</h4>
                                <p>Since you are from Indonesia Road Development Association (HPJI), please choose the executive board below!</p>
                            </div>
                            <div class="mb-3">
                                <label for="workunit" class="form-label"><h5>Executive Board of HPJI</h5></label><br>
                                <p>Please select which board of director in HPJI you present!</p>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="workunit" id="workunit1" value="Central Executive Board">
                                    <label class="form-check-label" for="workunit1">Central Executive Board</label>
                                </div>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="workunit" id="workunit2" value="Branch Executive Board of Aceh Region">
                                    <label class="form-check-label" for="workunit2">Branch Executive Board of Aceh Region</label>
                                </div>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="workunit" id="workunit3" value="Branch Executive Board of North Sumatera Region">
                                    <label class="form-check-label" for="workunit3">Branch Executive Board of North Sumatera Region</label>
                                </div>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="workunit" id="workunit4" value="Branch Executive Board of West Sumatera Region">
                                    <label class="form-check-label" for="workunit4">Branch Executive Board of West Sumatera Region</label>
                                </div>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="workunit" id="workunit5" value="Branch Executive Board of Riau Region">
                                    <label class="form-check-label" for="workunit5">Branch Executive Board of Riau Region</label>
                                </div>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="workunit" id="workunit6" value="Branch Executive Board of Jambi Region">
                                    <label class="form-check-label" for="workunit6">Branch Executive Board of Jambi Region</label>
                                </div>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="workunit" id="workunit7" value="Branch Executive Board of South Sumatera Region">
                                    <label class="form-check-label" for="workunit7">Branch Executive Board of South Sumatera Region</label>
                                </div>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="workunit" id="workunit8" value="Branch Executive Board of Bengkulu Region">
                                    <label class="form-check-label" for="workunit8">Branch Executive Board of Bengkulu Region</label>
                                </div>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="workunit" id="workunit9" value="Branch Executive Board of Lampung Region">
                                    <label class="form-check-label" for="workunit9">Branch Executive Board of Lampung Region</label>
                                </div>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="workunit" id="workunit10" value="Branch Executive Board of DKI Jakarta Region">
                                    <label class="form-check-label" for="workunit10">Branch Executive Board of DKI Jakarta Region</label>
                                </div>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="workunit" id="workunit11" value="Branch Executive Board of West Java Region">
                                    <label class="form-check-label" for="workunit11">Branch Executive Board of West Java Region</label>
                                </div>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="workunit" id="workunit12" value="Branch Executive Board of Central Java Region">
                                    <label class="form-check-label" for="workunit12">Branch Executive Board of Central Region</label>
                                </div>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="workunit" id="workunit13" value="Branch Executive Board of D.I. Yogyakarta Region">
                                    <label class="form-check-label" for="workunit13">Branch Executive Board of Yogyakarta Region</label>
                                </div>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="workunit" id="workunit14" value="Branch Executive Board of East Java Region">
                                    <label class="form-check-label" for="workunit14">Branch Executive Board of East Java Region</label>
                                </div>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="workunit" id="workunit15" value="Branch Executive Board of West Kalimantan Region">
                                    <label class="form-check-label" for="workunit15">Branch Executive Board of West Kalimantan Region</label>
                                </div>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="workunit" id="workunit16" value="Branch Executive Board of Central Kalimantan Region">
                                    <label class="form-check-label" for="workunit16">Branch Executive Board of Central Kalimantan Region</label>
                                </div>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="workunit" id="workunit17" value="Branch Executive Board of South Kalimantan Region">
                                    <label class="form-check-label" for="workunit17">Branch Executive Board of South Kalimantan Region</label>
                                </div>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="workunit" id="workunit18" value="Branch Executive Board of East Kalimantan Region">
                                    <label class="form-check-label" for="workunit18">Branch Executive Board of East Kalimantan Region</label>
                                </div>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="workunit" id="workunit19" value="Branch Executive Board of North Sulawesi Region">
                                    <label class="form-check-label" for="workunit19">Branch Executive Board of North Sulawesi Region</label>
                                </div>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="workunit" id="workunit20" value="Branch Executive Board of Central Sulawesi Region">
                                    <label class="form-check-label" for="workunit20">Branch Executive Board of Central Sulawesi Region</label>
                                </div>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="workunit" id="workunit21" value="Branch Executive Board of South Sulawesi Region">
                                    <label class="form-check-label" for="workunit21">Branch Executive Board of South Sulawesi Region</label>
                                </div>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="workunit" id="workunit22" value="Branch Executive Board of Southeast Sulawesi Region">
                                    <label class="form-check-label" for="workunit22">Branch Executive Board of Southeast Sulawesi Region</label>
                                </div>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="workunit" id="workunit23" value="Branch Executive Board of Bali Region">
                                    <label class="form-check-label" for="workunit23">Branch Executive Board of Bali Region</label>
                                </div>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="workunit" id="workunit24" value="Branch Executive Board of West Nusa Tenggara Region">
                                    <label class="form-check-label" for="workunit24">Branch Executive Board of West Nusa Tenggara Region</label>
                                </div>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="workunit" id="workunit25" value="Branch Executive Board of East Nusa Tenggara Region">
                                    <label class="form-check-label" for="workunit25">Branch Executive Board of East Nusa Tenggara Region</label>
                                </div>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="workunit" id="workunit26" value="Branch Executive Board of Maluku Region">
                                    <label class="form-check-label" for="workunit26">Branch Executive Board of Maluku Region</label>
                                </div>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="workunit" id="workunit27" value="Branch Executive Board of Papua Region">
                                    <label class="form-check-label" for="workunit27">Branch Executive Board of Papua Region</label>
                                </div>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="workunit" id="workunit28" value="Branch Executive Board of North Maluku Region">
                                    <label class="form-check-label" for="workunit28">Branch Executive Board of North Maluku Region</label>
                                </div>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="workunit" id="workunit29" value="Branch Executive Board of Banten Region">
                                    <label class="form-check-label" for="workunit29">Branch Executive Board of Banten Region</label>
                                </div>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="workunit" id="workunit30" value="Branch Executive Board of Gorontalo Region">
                                    <label class="form-check-label" for="workunit30">Branch Executive Board of Gorontalo Region</label>
                                </div>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="workunit" id="workunit31" value="Branch Executive Board of Bangka Belitung Region">
                                    <label class="form-check-label" for="workunit31">Branch Executive Board of Bangka Belitung Region</label>
                                </div>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="workunit" id="workunit32" value="Branch Executive Board of Riau Islands Region">
                                    <label class="form-check-label" for="workunit32">Branch Executive Board of Riau Islands Region</label>
                                </div>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="workunit" id="workunit33" value="Branch Executive Board of West Papua Region">
                                    <label class="form-check-label" for="workunit33">Branch Executive Board of West Papua Region</label>
                                </div>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="workunit" id="workunit34" value="Branch Executive Board of West Sulawesi Region">
                                    <label class="form-check-label" for="workunit34">Branch Executive Board of West Sulawesi Region</label>
                                </div>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="workunit" id="workunit35" value="Branch Executive Board of North Kalimantan Region">
                                    <label class="form-check-label" for="workunit35">Branch Executive Board of North Kalimantan Region</label>
                                </div>
                                <br>
                                <!-- Add more radio options here -->
                            </div>
                            <div class="row justify-content-center">
                                <button type="button" class="btn btn-primary col-3" id="btn-prev1">Prev</button>&nbsp;&nbsp;
                                <button type="button" class="btn btn-primary col-3" id="btn-next2">Next</button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="attendance" role="tabpanel" aria-labelledby="attendance-tab">
                        <h4>ATTENDANCE CONFIRMATION</h4>
                        <p>Please complete the data of attendance confirmation below!</p>
                        <br>
                        <form id="form3">
                            <div class="mb-3">
                                <h5>Type of Attendance</h5>
                                <label for="attendance" class="form-label">The online participant is limited to 100 people</label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="attendance" id="attendance1" value="Online" required> 
                                    <label class="form-check-label" for="attendance1">Online</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="attendance" id="attendance2" value="Offline" required>
                                    <label class="form-check-label" for="attendance2">Offline</label>
                                </div>
                                <!-- Add more radio options here -->
                            </div>
                            <div class="mb-3">
                                <h5>List of Activities</h5>
                                <label for="activities" class="form-label">Please select the activities those you would like to attend.</label><br>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="activity1" id="activity1" value="attend">
                                    <label class="form-check-label" for="activity1">24th YEP Meeting "IoT for Road Design and Construction" (24th August 2023)</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="activity2" id="activity2"  value="attend">
                                    <label class="form-check-label" for="activity2">Parallel Room - 120th REAAA Council Meeting (24th August 2023)</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="activity3" id="activity3"  value="attend">
                                    <label class="form-check-label" for="activity3">Parallel Room - HORA Meeting "Standardized Asian Highway and Road Development" (24th August 2023)</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="activity4" id="activity4"  value="attend">
                                    <label class="form-check-label" for="activity4">Welcoming Reception (24th August 2023)</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="activity5" id="activity5"  value="attend">
                                    <label class="form-check-label" for="activity5">Opening Ceremony - Ballroom (25th August 2023)</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="activity6" id="activity6"  value="attend">
                                    <label class="form-check-label" for="activity6">Exhibition Opening - Limited Participant (25th August 2023)</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="activity7" id="activity7"  value="attend">
                                    <label class="form-check-label" for="activity7">Keynote Speakers (25th August 2023)</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="activity8" id="activity8"  value="attend">
                                    <label class="form-check-label" for="activity8">Parallel Room - Business Forum (Ballroom): Knowledge Sharing "The Implementation of Technology 4.0" (25th August 2023)</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="activity9" id="activity9"  value="attend">
                                    <label class="form-check-label" for="activity9">50th REAAA Anniversary Celebration (25th August 2023)</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="activity10" id="activity10"  value="attend">
                                    <label class="form-check-label" for="activity10">Parallel Room - Technical Session (7 Parallel Room) (25th-26th August 2023)</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="activity11" id="activity11"  value="attend">
                                    <label class="form-check-label" for="activity11">Technical Visit "Labuan Bajo - Tanamori Road & Widening of Labuan Bajo - Wakelambu Road" (27th August 2023)</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="activity12" id="activity12"  value="attend">
                                    <label class="form-check-label" for="activity12">Culture Visit "Komodo Island, Pink Beach, and Padar Island" (27th August 2023)</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="activity13" id="activity13" value="attend">
                                    <label class="form-check-label" for="activity13">IRDA Senior Official Meeting (27th August 2023) - Invitation Only</label>
                                </div>
                                <!-- Add more checkbox options here -->
                            </div>
                            <div class="row justify-content-center">
                                <button type="button" class="btn btn-primary col-3" id="btn-prev2">Prev</button>&nbsp;&nbsp;
                                <button type="button" class="btn btn-primary col-3" id="btn-next3">Next</button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="upload" role="tabpanel" aria-labelledby="upload-tab">
                        <form id="form4">
                            <div class="mb-3">
                                <h4>PAYMENT DETAIL</h4>
                                <p>Please follow the instruction below.</p>
                                <p>Each participant will receive registration barcode that will be sent through email.</p>
                                <br>
                                <h5>Bank Transfer Receipt</h5>
                                <p>Please transfer your registration fee to: </p>
                                <p>HIMPUNAN PENGEMBANGAN JALAN INDONESIA</p>
                                <p>Account Number : <b>0017366467</b> - Swift Code : <b>BNINIDJA</b></p>
                                <p>Bank : BNI Cabang Melawai Raya (BNI Melawai Raya Branch and attach your transfer receipt here.)</p>
                                <p>(File format PDF/jpg/png with max file size 2 mb)</p>
                                <!-- <label for="image" class="form-label">Upload Image</label> -->
                                <input type="file" name="bank_upload" class="form-control" id="updload" accept="image/*" required>
                            </div>
                            <?php if(!empty($data_user->bukti_transfer)){?>
                                <div class="image-area mt-4 mb-4"><img id="imgpreview" src="<?php echo base_url(); ?>upload/bukti_tf/<?php echo $data_user->bukti_transfer;?>" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>
                            <?php }else{?>
                                    <div class="image-area mt-4 mb-4"><img id="imgpreview" src="" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>
                            <?php }?>
							<div class="row justify-content-center">
                                <button type="button" class="btn btn-primary col-3" id="btn-prev3">Prev</button>&nbsp;&nbsp;
                                <button type="button" class="btn btn-success col-3" id="btn-next4">Submit</button>
                            </div>
                        </form>

                    </div>
  
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_success" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal_successLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modal_successLabel"></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                Registration Succes, please wait email for confirmation
                </div>
                <div class="modal-footer">
                    <button type="button" id="close" class="btn btn-success" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/js-registration.js"></script>
    <script>
        $(document).ready(function(){
            
            $("#updload").change(function(e) {
                var fileName = e.target.files[0].name;
                var filesize = e.target.files[0].size;
                if (filesize > 200000097152) {
                    document.getElementById("updload").value = "";
                    return false;
                } else {
                    if (filesize < 0) {
                    document.getElementById("updload").value = "";
                    return false;
                    } else {
                        const [file] = updload.files
                        if (file) {
                            imgpreview.src = URL.createObjectURL(file)
                        }
                    }
                }
            });

            let title ='<?php if(!empty($data_user->title)){echo $data_user->title;}?>';
            if(title =='Mr.'){
                document.getElementById("mr").click();
            }else if(title =='Mrs.'){
                document.getElementById("mrs").click();
            }else if(title =='Ms.'){
                document.getElementById("ms").click();
            }

            let organization ='<?php if(!empty($data_user->organization)){echo $data_user->organization;}?>';
            if(organization =='Directorate General of Highways, Ministry of Public Works and Housing (MPWH)'){
                document.getElementById("organization1").click();
            }else if(organization =='World Road Association (PIARC)'){
                document.getElementById("organization2").click();
            }else if(organization =='Road Engineering Association of Asia and Australasia (REAAA)'){
                document.getElementById("organization3").click();
            }else if(organization =='Indonesian Road Development Association (HPJI)'){
                document.getElementById("organization4").click();
            }else{
                document.getElementById("organization5").click();
                $("#organizationtext").val('<?php if(!empty($data_user->organization)){echo $data_user->organization;}?>');
            }
            
            let workunit ='<?php if(!empty($data_user->workunit)){echo $data_user->workunit;}?>';
            if(workunit =='Central Executive Board'){
                document.getElementById("workunit1").click();
            }else if(workunit =='Branch Executive Board of Aceh Region'){
                document.getElementById("workunit2").click();
            }else if(workunit =='Branch Executive Board of North Sumatera Region'){
                document.getElementById("workunit3").click();
            }else if(workunit =='Branch Executive Board of West Sumatera Region'){
                document.getElementById("workunit4").click();
            }else if(workunit =='Branch Executive Board of Riau Region'){
                document.getElementById("workunit5").click();
            }else if(workunit =='Branch Executive Board of Jambi Region'){
                document.getElementById("workunit6").click();
            }else if(workunit =='Branch Executive Board of South Sumatera Region'){
                document.getElementById("workunit7").click();
            }else if(workunit =='Branch Executive Board of Bengkulu Region'){
                document.getElementById("workunit8").click();
            }else if(workunit =='Branch Executive Board of Lampung Region'){
                document.getElementById("workunit9").click();
            }else if(workunit =='Branch Executive Board of DKI Jakarta Region'){
                document.getElementById("workunit10").click();
            }else if(workunit =='Branch Executive Board of West Java Region'){
                document.getElementById("workunit11").click();
            }else if(workunit =='Branch Executive Board of Central Java Region'){
                document.getElementById("workunit12").click();
            }else if(workunit =='Branch Executive Board of D.I. Yogyakarta Region'){
                document.getElementById("workunit13").click();
            }else if(workunit =='Branch Executive Board of East Java Region'){
                document.getElementById("workunit14").click();
            }else if(workunit =='Branch Executive Board of West Kalimantan Region'){
                document.getElementById("workunit15").click();
            }else if(workunit =='Branch Executive Board of Central Kalimantan Region'){
                document.getElementById("workunit16").click();
            }else if(workunit =='Branch Executive Board of South Kalimantan Region'){
                document.getElementById("workunit17").click();
            }else if(workunit =='Branch Executive Board of East Kalimantan Region'){
                document.getElementById("workunit18").click();
            }else if(workunit =='Branch Executive Board of North Sulawesi Region'){
                document.getElementById("workunit19").click();
            }else if(workunit =='Branch Executive Board of Central Sulawesi Region'){
                document.getElementById("workunit20").click();
            }else if(workunit =='Branch Executive Board of South Sulawesi Region'){
                document.getElementById("workunit21").click();
            }else if(workunit =='Branch Executive Board of Southeast Sulawesi Region'){
                document.getElementById("workunit22").click();
            }else if(workunit =='Branch Executive Board of Bali Region'){
                document.getElementById("workunit23").click();
            }else if(workunit =='Branch Executive Board of West Nusa Tenggara Region'){
                document.getElementById("workunit24").click();
            }else if(workunit =='Branch Executive Board of East Nusa Tenggara Region'){
                document.getElementById("workunit25").click();
            }else if(workunit =='Branch Executive Board of Maluku Region'){
                document.getElementById("workunit26").click();
            }else if(workunit =='Branch Executive Board of Papua Region'){
                document.getElementById("workunit27").click();
            }else if(workunit =='Branch Executive Board of North Maluku Region'){
                document.getElementById("workunit28").click();
            }else if(workunit =='Branch Executive Board of Banten Region'){
                document.getElementById("workunit29").click();
            }else if(workunit =='Branch Executive Board of North Gorontalo Region'){
                document.getElementById("workunit30").click();
            }else if(workunit =='Branch Executive Board of North Bangka Belitung Region'){
                document.getElementById("workunit31").click();
            }else if(workunit =='Branch Executive Board of North Riau Islands Region'){
                document.getElementById("workunit32").click();
            }else if(workunit =='Branch Executive Board of West Papua Region'){
                document.getElementById("workunit33").click();
            }else if(workunit =='Branch Executive Board of West Sulawesi Region'){
                document.getElementById("workunit34").click();
            }else if(workunit =='Branch Executive Board of North Kalimantan Region'){
                document.getElementById("workunit35").click();
            }

            
            let activity1 ='<?php if(!empty($data_user->activity1)){echo $data_user->activity1;}?>';
            if(activity1 =='attend'){document.getElementById("activity1").click();}else{}
            let activity2 ='<?php if(!empty($data_user->activity2)){echo $data_user->activity2;}?>';
            if(activity2 =='attend'){document.getElementById("activity2").click();}else{}
            let activity3 ='<?php if(!empty($data_user->activity3)){echo $data_user->activity3;}?>';
            if(activity3 =='attend'){document.getElementById("activity3").click();}else{}
            let activity4 ='<?php if(!empty($data_user->activity4)){echo $data_user->activity4;}?>';
            if(activity4 =='attend'){document.getElementById("activity4").click();}else{}
            let activity5 ='<?php if(!empty($data_user->activity5)){echo $data_user->activity5;}?>';
            if(activity5 =='attend'){document.getElementById("activity5").click();}else{}
            let activity6 ='<?php if(!empty($data_user->activity6)){echo $data_user->activity6;}?>';
            if(activity6 =='attend'){document.getElementById("activity6").click();}else{}
            let activity7 ='<?php if(!empty($data_user->activity7)){echo $data_user->activity7;}?>';
            if(activity7 =='attend'){document.getElementById("activity7").click();}else{}
            let activity8 ='<?php if(!empty($data_user->activity8)){echo $data_user->activity8;}?>';
            if(activity8 =='attend'){document.getElementById("activity8").click();}else{}
            let activity9 ='<?php if(!empty($data_user->activity9)){echo $data_user->activity9;}?>';
            if(activity9 =='attend'){document.getElementById("activity9").click();}else{}
            let activity10 ='<?php if(!empty($data_user->activity10)){echo $data_user->activity10;}?>';
            if(activity10 =='attend'){document.getElementById("activity10").click();}else{}
            let activity11 ='<?php if(!empty($data_user->activity11)){echo $data_user->activity11;}?>';
            if(activity11 =='attend'){document.getElementById("activity11").click();}else{}
            let activity12 ='<?php if(!empty($data_user->activity12)){echo $data_user->activity12;}?>';
            if(activity12 =='attend'){document.getElementById("activity12").click();}else{}
            let activity13 ='<?php if(!empty($data_user->activity13)){echo $data_user->activity13;}?>';
            if(activity13 =='attend'){document.getElementById("activity13").click();}else{}

            
            let type_of_attendance ='<?php if(!empty($data_user->type_of_attendance)){echo $data_user->type_of_attendance;}?>';
            if(type_of_attendance =='Online'){
                document.getElementById("attendance1").click();
            }else if(type_of_attendance =='Offline'){
                document.getElementById("attendance2").click();
            }
            
            $('#close').click(function(e){
                location.href='<?php echo base_url(); ?>splitmenu';
            });
            $('#btn-next1').click(function(e){
                var data = $("#form1").serialize();
                $("#form1").validate({
                    rules: {
                        email: 'required',
                    },
                    comment: {
                        required: true
                    },
                    messages: {
                    },
                }).form();
                if ($("#form1").valid()) {
                    $.ajax({
                        type: "POST",
                        url: '<?php echo base_url(); ?>registration/insert_form1',
                        data: data,
                        dataType: "json",
                        success:function(data){        
							if (data == "success") {
                                document.getElementById("workunit-tab").click(); // Mengarahkan ke tab "Work Unit"
                            }
                        }
                    });
                }
            });
            $('#btn-next2').click(function(e){
                var data = $("#form2").serialize();
                $("#form2").validate({
                    rules: {
                        workunit: 'required',
                    },
                    comment: {
                        required: true
                    },
                    messages: {
                    },
                }).form();
                if ($("#form2").valid()) {
                    $.ajax({
                        type: "POST",
                        url: '<?php echo base_url(); ?>registration/insert_form2',
                        data: data,
                        dataType: "json",
                        success:function(data){        
							if (data == "success") {
                                document.getElementById("attendance-tab").click(); // Mengarahkan ke tab "Type of Attendance"
                            }
                        }
                    });
                }
            });
            $('#btn-next3').click(function(e){
                var data = $("#form3").serialize();
                $("#form3").validate({
                    rules: {
                        workunit: 'required',
                    },
                    comment: {
                        required: true
                    },
                    messages: {
                    },
                }).form();
                if ($("#form3").valid()) {
                    $.ajax({
                        type: "POST",
                        url: '<?php echo base_url(); ?>registration/insert_form3',
                        data: data,
                        dataType: "json",
                        success:function(data){        
							if (data == "success") {
                                document.getElementById("upload-tab").click(); // Mengarahkan ke tab "Upload Image"
                            }
                        }
                    });
                }
            });
            $('#btn-next4').click(function(e){
				var formData = new FormData($('#form4')[0]);
                $("#form4").validate({
                    rules: {
                        workunit: 'required',
                    },
                    comment: {
                        required: true
                    },
                    messages: {
                    },
                }).form();
                if ($("#form4").valid()) {
                    $.ajax({
                        type: "POST",
                        url: '<?php echo base_url(); ?>registration/insert_form4',
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
                                    text: "Submit Registration success",
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

        document.getElementById("btn-prev1").addEventListener("click", function() {
            document.getElementById("personal-tab").click(); // Mengarahkan kembali ke tab "Personal"
        });
        document.getElementById("btn-prev2").addEventListener("click", function() {
            document.getElementById("workunit-tab").click(); // Mengarahkan kembali ke tab "Work Unit"
        });
        document.getElementById("btn-prev3").addEventListener("click", function() {
            document.getElementById("attendance-tab").click(); // Mengarahkan kembali ke tab "Type of Attendance"
        });
    </script>
</body>

</html>