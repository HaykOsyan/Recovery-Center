{{--add product 1 page modal--}}
<div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="addProductModal" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Adding new product</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body ml-5 pl-5">
                <div class="product-name mt-4">
                    <h4>Add  product name</h4>
                   <div class="row mt-3">
                       <div class="product-name-en col-lg-6">
                           <label class="col-lg-12" for="product-name-en">in English</label>
                           <input id="product-name-en" class="input-product" placeholder="Type product name here" type="text">
                       </div>
                       <div class="product-name-am col-lg-6">
                           <label class="col-lg-12" for="product-name-am">Հայերեն</label>
                           <input id="product-name-am" class="input-product" placeholder="Մուտքագրեք ապրանքի անվանումը" type="text">
                       </div>
                   </div>
                </div>
                <div class="product-description mt-4">
                    <h4>Add  product description</h4>
                    <div class="row mt-3">
                        <div class="product-description-en col-lg-6">
                            <label class="col-lg-12" for="product-description-en">in English</label>
                            <input id="product-description-en" class="input-product" placeholder="Type headline if needed" type="text">
                            <input type="text" class="input-description" placeholder="Type product description here">
                        </div>
                        <div class="product-description-am col-lg-6">
                            <label class="col-lg-12" for="product-description-am">Հայերեն</label>
                            <input id="product-description-am" class="input-product" placeholder="Մուտքագրեք վերնագիր եթե ցանկանում եք" type="text">
                            <input type="text" class="input-description" placeholder="Մուտքագրեք ապրանքի նկարագիրը">
                        </div>
                    </div>
                </div>
                <div class="product-category mt-4">
                    <h4>Choose product category</h4>
                    <div class="row mt-3">
                        <div class="product-cat col-lg-6">
                            <select name="category" class="select-admin col-lg-6" id="category-select">
                                <option>Furniture</option>
                            </select>
                                <button class="btn-icon" data-toggle="modal" data-target="#addCategoryModal">
                                    <i class="fas fa-plus-circle" aria-hidden="true"></i>
                                </button>
                                <span>Add new</span>
                        </div>
                        <div class="product-name-am col-lg-6">
                            <input id="product-bestseller" type="checkbox">
                            <label for="product-bestseller">Mark as Bestseller</label>
                        </div>
                    </div>
                </div>
                <div class="product-price mt-4">
                    <h4>Price</h4>
                    <div class="row mt-3">
                        <div class="product-cat col-lg-6">
                            <input type="number" class="input-price">
                            <select name="currency" id="currency-select">
                                <option value="AMD">AMD</option>
                            </select>
                        </div>
                        <div class="product-name-am col-lg-6">
                            <input id="product-order" type="checkbox">
                            <label for="product-order">Order</label>
                            <input id="product-preorder" type="checkbox">
                            <label for="product-preorder">Preorder</label>
                        </div>
                    </div>
                </div>
                <div class="product-specifications mt-4">
                    <h4>Choose product specifications</h4>
                    <div class="row mt-3">
                        <div class="product-specifications col-lg-12">
                            <select name="specification" id="select-color" class="select-admin col-lg-3 ml-3">
                                <option>Add Color</option>
                            </select>
                            <select name="specification" id="select-size" class="select-admin col-lg-3 ml-3">
                                <option>Add Size</option>
                            </select>
                            <select name="specification" id="select-special" class="select-admin col-lg-3 ml-3">
                                <option>Add Special Marks</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="product-tags mt-4 col-lg-6">
                    <input id="product-tag" class="input-product" placeholder="Add tags here" type="text">
                </div>
                <button type="button" class="btn btn-secondary mt-3 ml-3">Cats X</button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-warning" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#addProductModal2">Next</button>
            </div>
        </div>
    </div>
</div>
{{--add product 2 page modal--}}
<div class="modal fade" id="addProductModal2" tabindex="-1" role="dialog" aria-labelledby="addProductModal2" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Adding new product</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body ml-5 pl-5">
                <div class="mt-4">
                    <h4>Attach photos</h4>
                    <p>Photos should be 1200x2560 size akshfiak asd hsafjlkdfjks  fadsf dsaf jldkf df saf adsf adsglk;</p>
                    <button type="button" class="btn btn-secondary">Download photo <i class="fas fa-file-download"></i></button>
                    <div class="row">
                        <div class="col-lg-2 p-4">
                            <div class="product-photo position-relative">
                                <span class="position-absolute delete-icon"><i class="fas fa-times fa-3x"></i></span>
                            </div>
                            <input id="main-photo" type="checkbox">
                            <label for="main-photo">Main photo</label>
                        </div>
                    </div>
                </div>
                <div class="product-frame mt-4">
                    <h4>Product can include</h4>
                    <div class="mt-3">
                        <div class="col-lg-6">
                            <select name="frame" class="select-admin col-lg-6" id="frame-select">
                                <option>Frame</option>
                            </select>
                            <span> + 35 USD</span>
                        </div>
                        <div class="add-frame mt-2">
                            <button class="btn-icon"><i class="fas fa-plus-circle"></i></button>
                            <span>Add new</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-warning" data-dismiss="modal">Back</button>
                <button type="button" class="btn btn-outline-success">Save</button>
            </div>
        </div>
    </div>
</div>
{{--add project modal--}}
<div class="modal fade" id="addProjectModal" tabindex="-1" role="dialog" aria-labelledby="addProjectModal" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Adding new project</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body ml-5 pl-5">
                <div class="project-name mt-4">
                    <h4>Add  project name</h4>
                    <div class="row mt-3">
                        <div class="project-name-en col-lg-6">
                            <label class="col-lg-12" for="product-name-en">in English</label>
                            <input id="project-name-en" class="input-product" placeholder="Type project name here" type="text">
                        </div>
                        <div class="product-name-am col-lg-6">
                            <label class="col-lg-12" for="project-name-am">Հայերեն</label>
                            <input id="project-name-am" class="input-product" placeholder="Մուտքագրեք ապրանքի անվանումը" type="text">
                        </div>
                    </div>
                </div>
                <div class="project-description mt-4">
                    <h4>Add  product description</h4>
                    <div class="row mt-3">
                        <div class="project-description-en col-lg-6">
                            <label class="col-lg-12" for="project-description-en">in English</label>
                            <input id="project-description-en" class="input-product" placeholder="Type headline if needed" type="text">
                            <input type="text" class="input-description" placeholder="Type project description here">
                        </div>
                        <div class="project-description-am col-lg-6">
                            <label class="col-lg-12" for="project-description-am">Հայերեն</label>
                            <input id="project-description-am" class="input-product" placeholder="Մուտքագրեք վերնագիր եթե ցանկանում եք" type="text">
                            <input type="text" class="input-description" placeholder="Մուտքագրեք ապրանքի նկարագիրը">
                        </div>
                    </div>
                </div>
                <div class="product-category mt-4">
                    <div class="row mt-3">
                        <div class="product-cat col-lg-6">
                            <h4>Choose project date</h4>
                            <input class="FieldInput_container__1N6yS" type="date">
                        </div>
                        <div class="product-name-am col-lg-6">
                            <h4>Add location (optional)</h4>
                            <input id="project-location" class="input-product" placeholder="Type project location" type="text">
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <h4>Attach main photos</h4>
                    <p>Photos should be 1200x2560 size akshfiak asd hsafjlkdfjks  fadsf dsaf jldkf df saf adsf adsglk;</p>
                    <button type="button" class="btn btn-secondary">Download photo <i class="fas fa-file-download"></i></button>
                    <div class="row">
                        <div class="col-lg-2 p-4">
                            <div class="product-photo position-relative">
                                <span class="position-absolute delete-icon"><i class="fas fa-times fa-3x"></i></span>
                            </div>
                            <input id="main-photo" type="checkbox">
                            <label for="main-photo">Main photo</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-warning" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-outline-success">Save</button>
            </div>
        </div>
    </div>
</div>
{{--add category modal--}}
<div class="modal fade" id="addCategoryModal" tabindex="-1" role="dialog" aria-labelledby="addCategoryModal" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Adding new category</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body ml-5 pl-5">
                <div class="product-name mt-4">
                    <h4>Add  category name</h4>
                    <div class="row mt-3">
                        <div class="product-name-en col-lg-6">
                            <label class="col-lg-12" for="category-name-en">in English</label>
                            <input id="category-name-en" class="input-product" placeholder="Type category name here" type="text">
                        </div>
                        <div class="product-name-am col-lg-6">
                            <label class="col-lg-12" for="category-name-am">Հայերեն</label>
                            <input id="category-name-am" class="input-product" placeholder="Մուտքագրեք կատեգորյայի անվանումը" type="text">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-warning" data-dismiss="modal">Cancel</button>
                <button id="addCatBtn" type="button" class="btn btn-outline-success">Add</button>
            </div>
        </div>
    </div>
</div>

