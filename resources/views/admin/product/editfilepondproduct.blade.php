{{-- Edit Product --}}
<div class="modal fade" id="EditProduct" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header bg-light p-3">
                <h5 class="modal-title" id="exampleModalLabel">Edit Product Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="close-modal"></button>
            </div>
            <form action="#" method="post" id="product-edit-form" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="d-flex gap-2">
                        <div class="card" style="width: 65%; height: auto; ">
                            <div class="card-body" style="box-shadow: 0 0 10px rgba(135, 128, 128, 0.2);">
                                <h5>
                                    Product
                                </h5>
                                <div class="row">
                                    <input type="text" name="id" id="ideditProduct" hidden>
                                    <div class="col-lg-12 mt-2">
                                        <label for="name" class="control-label mb-1">Product Name<span
                                                class="ms-1 text-danger">*</span></label>
                                        <input id="Editname" name="name" type="text" class="form-control"
                                            value="{{ old('name') }}" placeholder="Enter Product Name">
                                        <div class="invalid-feedback" id="EditProductNameError"></div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-12">
                                            <div>
                                                <label for="descriptionInput" class="form-label">
                                                    Description
                                                </label>
                                                <div id="Editeditor"></div>
                                                <input type="hidden" name="description"
                                                    value="{{ old('description') }}" id="Editeditor_input">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div style="width: 35%; ">
                            <div class="card ">
                                <div class="card-body" style="box-shadow: 0 0 10px rgba(135, 128, 128, 0.2);">
                                    <h5>
                                        Product Status
                                    </h5>
                                    <div class="col-lg-12">
                                        <label for="status" class="control-label mb-1">Product Status<span
                                                class="ms-1 text-danger">*</span></label>
                                        <select id="Editproductstatus" class="form-select" name="status">
                                            <option value="1" selected>Active</option>
                                            <option value="0">InActive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="card " style="width ">
                                <div class="card-body" style="box-shadow: 0 0 10px rgba(135, 128, 128, 0.2);">
                                    <h5>
                                        Product Category
                                    </h5>
                                    <div class="col-lg-12 mt-2">
                                        <label for="category" class="control-label mb-1">Category<span
                                                class="ms-1 text-danger">*</span></label>
                                        <select id="Editcategory_id" class="js-example-basic-singleEdit"
                                            name="category_id">
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">
                                                    {{ $category->category_name ?? '' }}</option>
                                            @endforeach
                                        </select>
                                        <div class="invalid-feedback" id="EditProductCategoryError"></div>

                                    </div>

                                    <div class="col-lg-12 mt-2">
                                        <label for="subcategory" class="control-label mb-1">Sub Category<span
                                                class="ms-1 text-danger">*</span></label>
                                        <select id="Editsub_categories_id" class="js-example-basic-singleEdit"
                                            name="sub_categories_id">

                                            @foreach ($subcategories as $subcategory)
                                                <option value="{{ $subcategory->id }}">
                                                    {{ $subcategory->subcategory_name ?? '' }}</option>
                                            @endforeach
                                        </select>
                                        <div class="invalid-feedback" id="EditProductSubCategoryError"></div>

                                    </div>

                                    <div class="col-lg-12 mt-2">
                                        <label for="brand" class="control-label mb-1">Brand</label>
                                        <select id="Editbrand_id" class="js-example-basic-singleEdit" name="brands_id">
                                            <option class="" value="">Select Brands</option>
                                            @foreach ($brands as $brand)
                                                <option value="{{ $brand->id }}">
                                                    {{ $brand->name ?? '' }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="invalid-feedback" id="EditProductBrandError"></div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body" style="box-shadow: 0 0 10px rgba(135, 128, 128, 0.2);">
                                    <h5>
                                        Product Featured
                                    </h5>
                                    <div class="col-lg-12">
                                        <select id="Editfeatured" class="form-select" name="featured">
                                            <option value="0" selected>No</option>
                                            <option value="1">Yes</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="width: 100%;">
                        <div class="card-body" style="box-shadow: 0 0 10px rgba(135, 128, 128, 0.2);">
                            <div class="row my-6">
                                <div class="col-lg-12">
                                    <h5>
                                        Product Images
                                    </h5>
                                    <input name="image[]" id="EditProduct_images" type="file"
                                        class="filepond filepond-input-multiple w-100" multiple
                                        data-allow-reorder="true" data-max-file-size="3MB" data-max-files="5">
                                </div>
                            </div>
                            <div class="invalid-feedback" id="EditProductImagesError"></div>
                        </div>
                    </div>
                    <div class="d-flex gap-2">
                        <div class="card" style="width: 50%;">
                            <div class="card-body" style="box-shadow: 0 0 10px rgba(135, 128, 128, 0.2);">
                                <div class="col-lg-12">
                                    <h5>
                                        Product Price
                                    </h5>
                                    <div class="col-lg-12 mt-2">
                                        <label for="name" class="control-label mb-1">Price<span
                                                class="ms-1 text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="product-discount-addon">Nrs</span>
                                            <input type="text" name="price" class="form-control"
                                                id="Editproduct-price" placeholder="Enter Price">
                                        </div>
                                        <div class="invalid-feedback" id="EditProductPriceError"></div>
                                    </div>
                                    <div class="col-lg-12 mt-2">
                                        <label for="name" class="control-label mb-1">Discount</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="product-discount-addon">%</span>
                                            <input type="text" name="discount" class="form-control"
                                                id="Editproduct-discount" placeholder="Enter discount">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="width: 50%;">
                            <div class="card-body" style="box-shadow: 0 0 10px rgba(135, 128, 128, 0.2);">
                                <div class="col-lg-12">
                                    <h5>
                                        Product Stock
                                    </h5>
                                    <div class="col-lg-12 mt-2">
                                        <label for="name" class="control-label mb-1">In Stock<span
                                                class="ms-1 text-danger">*</span></label>
                                        <input id="EditStock" name="stock" type="text" class="form-control"
                                            value="{{ old('name') }}" placeholder="Stocks">
                                        <div class="invalid-feedback" id="EditProductStockError"></div>
                                    </div>
                                    <div class="col-lg-12 mt-2">
                                        <label for="name" class="control-label mb-1">Available Sizes</label>
                                        <select id="Editsizes" class="form-select" name="sizes">
                                            <option value="S" selected>Small</option>
                                            <option value="M">Medium</option>
                                            <option value="L">Large</option>
                                            <option value="XL">Extra Large</option>
                                            <option value="XXL">Double Extra Large</option>
                                        </select>
                                        <div class="invalid-feedback" id="EditProductSizesError"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <div class="hstack gap-2 justify-content-end">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success" id="edit-Product-button">Edit
                                Product</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


{{-- Edit Verification for Prodcut --}}
<script>
    $(document).ready(function() {


        $('#edit-Product-button').click(function(e) {
            e.preventDefault();

            // Get the data from the CKEditor
            var editorData = editorInstance ? editorInstance.getData() : '';

            // Create a new FormData object
            var formData = new FormData(document.getElementById('product-edit-form'));

            // Append the CKEditor data to the formData
            formData.append('description', editorData);



            $.ajax({
                type: 'POST',
                url: "{{ route('admin.product.update') }}",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    console.log("finally");
                    showToast(response.message);
                    $('#EditProduct').modal('hide');
                    $('#datatable-crud').DataTable().ajax.reload();
                    $('#successAlertContainer').html(successAlert);
                },
                error: function(error) {
                    console.log(error);
                    document.getElementById('EditProductNameError').style.display = "none";
                    document.getElementById('EditProductCategoryError').style.display =
                        "none";
                    document.getElementById('EditProductSubCategoryError').style.display =
                        "none";
                    document.getElementById('EditProductBrandError').style.display = "none";
                    document.getElementById('EditProductImagesError').style.display =
                        "none";
                    document.getElementById('EditProductPriceError').style.display = "none";
                    document.getElementById('EditProductStockError').style.display = "none";

                }
            });

        });
    });
</script>

{{-- Select2 JS --}}
<script>
    $(document).ready(function() {
        $('.js-example-basic-singleEdit').select2({
            dropdownParent: $('#EditProduct')
        });
    });
</script>








{{-- ---------------------- show edit for Product  -------------------- --}}
<script>
    $(document).ready(function() {
        $('.data-table').on("click", ".editProductButton", function() {
            var id = $(this).data('id');

            $('#EditProduct').modal('show');
            $.ajax({
                type: 'GET',
                url: "{{ route('admin.product.edit') }}",
                data: {
                    id: id
                },
                success: function(response) {
                    console.log(response)
                    initializeFilePond(response.image);
                    var productDescription = response.description;
                    console.log(response);
                    initializeEditor('#Editeditor', productDescription);
                    $('#ideditProduct').val(response.id);
                    $('#Editname').val(response.name);
                    $('#Editcategory_id').val(response.category_id).trigger('change');
                    $('#Editcategory_id option').each(function() {
                        if ($(this).val() == response.category_id) {
                            $(this).prop('selected', true);
                        }
                    });
                    $('#Editsub_categories_id').val(response.sub_categories_id).trigger(
                        'change');
                    $('#Editsub_categories_id option').each(function() {
                        if ($(this).val() == response.sub_categories_id) {
                            $(this).prop('selected', true);
                        }
                    });
                    $('#Editbrand_id').val(response.brands_id).trigger('change');
                    $('#Editbrand_id option').each(function() {
                        if ($(this).val() == response.brands_id) {
                            $(this).prop('selected', true);
                        }
                    });
                    $('#Editproduct-price').val(response.price);
                    $('#Editproduct-discount').val(response.discount);
                    $('#EditStock').val(response.stock);
                    $('#Editproductstatus').val(response.status);
                    $('#Editsizes').val(response.sizes);
                },
                error: function(error) {
                    console.log(error);
                }
            });
        });
    });

    function initializeFilePond(imageUrls) {
        console.log(imageUrls);

        const filePondElement = document.querySelector('#EditProduct_images');

        if (Array.isArray(imageUrls)) {

            const filePondInstance = FilePond.create(filePondElement, {
                files: imageUrls.map(imageUrls => ({
                    source: imageUrls,
                    options: {
                        type: 'local',
                    }
                })),
                server: {
                    url: 'uploads/products'
                },
                allowReorder: true,
                allowMultiple: true,
                allowReplace: true,
                instantUpload: true,
            });
        } else {
            console.error('Image URLs are not provided or not in array format.');
        }
    }
</script>
{{-- For CkEditor DAta Retrive --}}
<script>
    var editorInstance = null;

    function initializeEditor(editorElement, productDescription) {
        if (editorInstance) {
            editorInstance.destroy().then(() => {
                createNewEditorInstance(editorElement, productDescription);
            });
        } else {
            createNewEditorInstance(editorElement, productDescription);
        }
    }

    function createNewEditorInstance(editorElement, productDescription) {
        editorInstance = ClassicEditor
            .create(document.querySelector(editorElement), {
                // Configuration options for the editor (if needed)
            })
            .then(editor => {
                // Set the editor data to display the task description
                editor.setData(productDescription ?? '');
                editorInstance = editor;
            })
            .catch(error => {
                console.error(error);
            });
    }
</script>
{{--
if (error.responseJSON.errors) {
    if (error.responseJSON.errors.name) {
        var errMsg = document.getElementById('EditProductNameError');
        if (error.responseJSON.errors.name[0]) {
            errMsg.style.display = "block";
            errMsg.textContent = error.responseJSON.errors.name[0];
        }
    }
    if (error.responseJSON.errors.category_id) {
        var errMsg = document.getElementById('EditProductCategoryError');
        if (error.responseJSON.errors.category_id[0]) {
            errMsg.style.display = "block";
            errMsg.textContent = error.responseJSON.errors.category_id[
                0];
        }
    }
    if (error.responseJSON.errors.sub_categories_id) {
        var errMsg = document.getElementById('EditProductSubCategoryError');
        if (error.responseJSON.errors.sub_categories_id[0]) {
            errMsg.style.display = "block";
            errMsg.textContent = error.responseJSON.errors
                .sub_categories_id[0];
        }
    }
    if (error.responseJSON.errors.brands_id) {
        var errMsg = document.getElementById('EditProductImagesError');
        if (error.responseJSON.errors.brands_id[0]) {
            errMsg.style.display = "block";
            errMsg.textContent = error.responseJSON.errors.brands_id[0];
        }
    }
    if (error.responseJSON.errors.image) {
        var errMsg = document.getElementById('ProductImagesError');
        if (error.responseJSON.errors.image[0]) {
            errMsg.style.display = "block";
            errMsg.textContent = error.responseJSON.errors.image[0];
        }
    }
    if (error.responseJSON.errors.price) {
        var errMsg = document.getElementById('EditProductPriceError');
        if (error.responseJSON.errors.price[0]) {
            errMsg.style.display = "block";
            errMsg.textContent = error.responseJSON.errors.price[0];
        }
    }
    if (error.responseJSON.errors.stock) {
        var errMsg = document.getElementById('EditProductStockError');
        if (error.responseJSON.errors.stock[0]) {
            errMsg.style.display = "block";
            errMsg.textContent = error.responseJSON.errors.stock[0];
        }
    }
} --}}
