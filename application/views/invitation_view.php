<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style-undangan.css">
    <title>Invitation Card AARC 2023</title>
</head>

<body>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content undangan">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Invitation Card</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center mb-4">
                        <img src="assets/img/logo-aarc-2023.png" alt="logo" width="200px" class="mb-2">
                        <h5>Advance Technology Implementation Towards Sustainable Road Development</h5>
                    </div>
                    <div class="text-center mb-3">
                        <img src="assets/img/qrcode-dummy.png" alt="logo" width="150px">
                    </div>
                    <div class="text-center mb-3">
                        <p>Invitation to attend the International Conference on <br> Asia Australasia Road Conference (AARC) 2023</p>
                        <h5>Title - Full Name </h5>
                        <h5>Country</h5>
                        <h5>Organization</h5>
                        <h5>Work Unit</h5>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>