<script setup>
import adminLayout from '../../components/layouts/admin/adminLayout.vue'
// import {defineProps} from 'vue'  //onMounted, Reactive, Ref, 

// const props = defineProps({
//   no: String,
// });

// const { no } = toRefs(props);

// const state = reactive({
//   room: {},
// });

// const init = async () => {
//   const { data } = await getRoomByNo(no.value);
//   console.log(data);
// };

// init();
</script>

<template>
    <adminLayout>
        <!-- start: Content -->
        <div class="py-4">

            <!-- start: Graph -->
            <div class="row g-3 mt-2">
                <div class="col-12 col-md-12 col-xl-12">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-header bg-white">
                            Blank Page
                            <button type="button" class="btn btn-primary btn-sm m-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Launch static backdrop modal
                            </button>
                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Launch demo modal
                            </button>
                        </div>
                        <div class="card-body">

                            <form class="row g-3 needs-validation" novalidate>
                                <div class="col-md-4 position-relative">
                                    <label for="validationTooltip01" class="form-label">First name</label>
                                    <input type="text" class="form-control form-control-sm" id="validationTooltip01" value="Mark" required>
                                    <div class="valid-tooltip">
                                    Looks good!
                                    </div>
                                </div>
                                <div class="col-md-4 position-relative">
                                    <label for="validationTooltip02" class="form-label">Last name</label>
                                    <input type="text" class="form-control form-control-sm" id="validationTooltip02" value="Otto" required>
                                    <div class="valid-tooltip">
                                    Looks good!
                                    </div>
                                </div>
                                <div class="col-md-4 position-relative">
                                    <label for="validationTooltipUsername" class="form-label">Username</label>
                                    <div class="input-group has-validation">
                                    <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                                    <input type="text" class="form-control form-control-sm" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
                                    <div class="invalid-tooltip">
                                        Please choose a unique and valid username.
                                    </div>
                                    </div>
                                </div>
                                <div class="col-md-6 position-relative">
                                    <label for="validationTooltip03" class="form-label">City</label>
                                    <input type="text" class="form-control" id="validationTooltip03" required>
                                    <div class="invalid-tooltip">
                                    Please provide a valid city.
                                    </div>
                                </div>
                                <div class="col-md-3 position-relative">
                                    <label for="validationTooltip04" class="form-label">State</label>
                                    <select class="form-select" id="validationTooltip04" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option>...</option>
                                    </select>
                                    <div class="invalid-tooltip">
                                    Please select a valid state.
                                    </div>
                                </div>
                                <div class="col-md-3 position-relative">
                                    <label for="validationTooltip05" class="form-label">Zip</label>
                                    <input type="text" class="form-control" id="validationTooltip05" required>
                                    <div class="invalid-tooltip">
                                    Please provide a valid zip.
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Submit form</button>
                                </div>
                            </form>

                            <div class="mt-3"></div>

                            <!-- <canvas id="sales-chart"></canvas> -->
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-sm">
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">FirstName</th>
                                            <th scope="col">LastName</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Department</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Information</th>
                                            <th scope="col">Handle Setting</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto dghfh</td>
                                            <td>@mdo sdgdfsgd</td>
                                            <td>@mdo</td>
                                            <td>@mdo</td>
                                            <td>@mdo sdfasdgf</td>
                                            <td>@mdo edffgda</td>
                                            <td>
                                                <button type="button" class="btn btn-primary btn-sm m-1">Edit</button>
                                                <button type="button" class="btn btn-warning btn-sm m-1"><i class="fa-solid fa-trash"></i> View</button>
                                                <button type="button" class="btn btn-danger btn-sm"><i class="fa-sharp fa-solid fa-trash"></i> Delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto dghfh</td>
                                            <td>@mdo sdgdfsgd</td>
                                            <td>@mdo</td>
                                            <td>@mdo</td>
                                            <td>@mdo sdfasdgf</td>
                                            <td>@mdo edffgda</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto dghfh</td>
                                            <td>@mdo sdgdfsgd</td>
                                            <td>@mdo</td>
                                            <td>@mdo</td>
                                            <td>@mdo sdfasdgf</td>
                                            <td>@mdo edffgda</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Button trigger modal -->

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Understood</button>
                                    </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Understood</button>
                                    </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                                </div>
                            </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <!-- end: Graph -->
        </div>
        <!-- end: Content -->
    </adminLayout>
</template>