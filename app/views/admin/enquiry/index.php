<?php require APPROOT . '/views/admin/inc/header.php'; ?>

<?php require APPROOT . '/views/admin/inc/navbar.php'; ?>







<!-- -------------------------- progress section --------------------------- -->
<section id="progress-section">

    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                <div class="row mb-4 align-item-center">

                    <div class="col-xl-10 col-12 mx-auto">
                        <div class="row">
                            <div class="col-sm-6">
                                <h4 class="text-muted my-5">Show Enquiries</h4>
                            </div>

                        </div>
                        <div class="text-danger" id="message"></div>

                        <div class="row">

                            <div class="col-sm-6 my-5 ">
                                <?php //echo flash('enquiry_message') 
                                ?>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-hover" id="enquiry_table">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <!-- check fields are avalable or not -->
                                        <?php if ($data['homepage']->field1) { ?>
                                            <th><?= $data['homepage']->field1 ?></th>
                                        <?php }
                                        if ($data['homepage']->field2) { ?>
                                            <th><?= $data['homepage']->field2 ?></th>
                                        <?php }
                                        if ($data['homepage']->field3) { ?>
                                            <th><?= $data['homepage']->field3 ?></th>
                                        <?php }
                                        if ($data['homepage']->field4) { ?>
                                            <th><?= $data['homepage']->field4 ?></th>
                                        <?php }
                                        if ($data['homepage']->field5) { ?>
                                            <th><?= $data['homepage']->field5 ?></th>
                                        <?php }
                                        if ($data['homepage']->field6) { ?>
                                            <th><?= $data['homepage']->field6 ?></th>
                                        <?php }
                                        // check dropdowns are available or not
                                        if ($data['homepage']->dropdown1) { ?>
                                            <th><?= $data['homepage']->dropdown1 ?></th>
                                        <?php }
                                        if ($data['homepage']->dropdown2) { ?>

                                            <th><?= $data['homepage']->dropdown2 ?></th>
                                        <?php }
                                        if ($data['homepage']->dropdown3) { ?>

                                            <th><?= $data['homepage']->dropdown3 ?></th>
                                        <?php } ?>

                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody id="getenquiry">

                                </tbody>

                            </table>
                        </div>
                        <!-- </div> -->


                        <!-- rows calls end here -->


                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- -------------------------- progress section end --------------------------- -->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script>
    const getEnquiery = document.getElementById("getenquiry");
    const message = document.getElementById("message");

    function GetEnquiery(data) {
        const {
            enquiry,
            homepage
        } = data;
        console.log(data);

        let text = '';
        for (i in enquiry) {
            text += `<tr>
                <td>${enquiry[i].id}</td>
                <td>${enquiry[i].name}</td>
                <td>${enquiry[i].email}</td>
                <td> ${enquiry[i].phone_number}</td>`;

            //   check fields are avalable or not 

            if (homepage.field1) {
                text += `<td> ${enquiry[i].field1}</td>`;

            }
            if (homepage.field2) {
                text += `<td> ${enquiry[i].field2}</td>`;

            }
            if (homepage.field3) {
                text += `<td>${enquiry[i].field3}</td>`;

            }
            if (homepage.field4) {
                text += `<td> ${enquiry[i].field4}</td>`;

            }
            if (homepage.field5) {
                text += `<td> ${enquiry[i].field5}</td>`;

            }
            if (homepage.field6) {
                text += `<td>${enquiry[i].field6}</td>`;
            }
            // check dropdowns are available or not
            if (homepage.dropdown1) {
                text += `<td>${enquiry[i].dropdown1_value}</td>`;
            }
            if (homepage.dropdown2) {
                text += `<td>${enquiry[i].dropdown2_value}</td>`;
            }
            if (homepage.dropdown3) {
                text += `<td>${enquiry[i].dropdown3_value}</td>`;
            }

            text += `<td>
    <a id="${enquiry[i].id}" class="btn text-danger delete">Delete</a>

    </td>
 </tr>`;

        }
        getEnquiery.innerHTML = text;
        $('#enquiry_table').DataTable();

    }

    // @desc - 
    // fetch all enquiries
    const fetchAllEnquiry = async () => {
        const data = await fetch("<?= URLROOT ?>/manageenquiry/get_AllEnquiery", {
            method: "GET",
        });
        const response = await data.text();
        //   console.log(response);
        let values = JSON.parse(response);
        // console.log(values);
        GetEnquiery(values);
        // $('#enquiry_table').DataTable();
    };



    window.addEventListener('DOMContentLoaded', fetchAllEnquiry());





    // delete enquiries
    const deleteEnquiry = async (id) => {
        // console.log("id", id);

        const data = await fetch(`<?= URLROOT ?>/manageenquiry/edit/${id}`, {
            method: "POST",
        });

        const response = await data.text();
        // console.log(enquiryTable);
        if (response) {
            message.innerHTML = response;


        } else {
            message.innerHTML = response;

        }
        // $('#enquiry_table').DataTable();

        fetchAllEnquiry();


    };
    addEventListener("click", (e) => {

        if (e.target && e.target.matches("a.delete")) {
            e.preventDefault();
            let id = e.target.getAttribute("id");
            // console.log(id);
            deleteEnquiry(id);
            fetchAllEnquiry();

        }
    });
</script>





<?php require APPROOT . '/views/admin/inc/footer.php'; ?>