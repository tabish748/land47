<?php include 'incl/header.php'; ?>
<style>
<?php include 'assets/css/pages/submit-property.css'?><?php include 'assets/css/pages/user-dashboard.css'?>.site-nav {
    background-color: black;
    position: static;
}

.ck-content {
    height: 200px;
}

.dashboard-main-section .form-card input[type=checkbox] {
    display: inline;
    margin-bottom: 0px !important;
    margin-left: 5px;
    width: fit-content !important;
    height: fit-content !important;
}
</style>



<div class="dashboard-main-section">

    <?php include './components/dashboard-sidebar.php'; ?>

    <div class="main-dashboard-content-area">
        <div class="submit-property-main-section">

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                            <!-- <h2 id="heading">Sign Up Your User Account</h2>
                            <p>Fill all form field to go to next step</p> -->
                            <form id="msform">
                                <!-- progressbar -->
                                <ul id="progressbar">
                                    <li class="active" id="account"><strong>Basic</strong></li>
                                    <li id="personal"><strong>Address</strong></li>
                                    <li id="payment"><strong>Features</strong></li>
                                    <li id="confirm"><strong>Media</strong></li>
                                    <li id="media"><strong>Confirmation</strong></li>
                                </ul>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated"
                                        role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                </div> <br> <!-- fieldsets -->
                                <fieldset>
                                    <div class="form-card">
                                        <div class="row">
                                            <div class="col-7">
                                                <h2 class="fs-title">Basic:</h2>
                                            </div>
                                            <div class="col-5">
                                                <h2 class="steps">Step 1 - 5 </h2>
                                            </div>
                                        </div>
                                        <label class="fieldlabels">Title: *</label> <br>
                                        <input type="text" name="title" placeholder="Title" class="submit-inputbox" />
                                        <div id="editor" style="height:200px">
                                            <p></p>
                                        </div>

                                        <script>
                                        ClassicEditor
                                            .create(document.querySelector('#editor'), {


                                                toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList',
                                                    'numberedList', 'blockQuote', 'alignment:left',
                                                    'alignment:right', 'alignment:center', 'alignment:justify'
                                                ],

                                                heading: {
                                                    options: [{
                                                            model: 'paragraph',
                                                            title: 'Paragraph',
                                                            class: 'ck-heading_paragraph'
                                                        },
                                                        {
                                                            model: 'heading1',
                                                            view: 'h1',
                                                            title: 'Heading 1',
                                                            class: 'ck-heading_heading1'
                                                        },
                                                        {
                                                            model: 'heading2',
                                                            view: 'h2',
                                                            title: 'Heading 2',
                                                            class: 'ck-heading_heading2'
                                                        }
                                                    ]
                                                }
                                            })
                                            .catch(error => {
                                                console.log(error);
                                            });
                                        </script>



                                        <div class="row mt-3">
                                            <div class="col-md-6 mb-3">
                                                <label class="fieldlabels">Property For: *</label> <br>

                                                <select name="" id="" class="submit-inputbox">
                                                    <option value="">Property for</option>
                                                    <option value="">Homes</option>
                                                    <option value="">Plots</option>
                                                    <option value="">Commercials</option>
                                                </select>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label class="fieldlabels">Property Type: *</label> <br>

                                                <select name="" id="" class="submit-inputbox">
                                                    <option value="">Property Type</option>
                                                    <option value="">Homes</option>
                                                    <option value="">Plots</option>
                                                    <option value="">Commercials</option>
                                                </select>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label class="fieldlabels">Price: *</label>
                                                <input type="email" name="numberb" placeholder="Price"
                                                    class="submit-inputbox" />
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label class="fieldlabels">Purpose: *</label> <br>

                                                <select name="" id="" class="submit-inputbox">
                                                    <option value="">Purpose</option>
                                                    <option value="">Rent</option>
                                                    <option value="">Sale</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- row -->

                                    </div> <input type="button" name="next" class="next action-button" value="Next" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <div class="row">
                                            <div class="col-7">
                                                <h2 class="fs-title">Address</h2>
                                            </div>
                                            <div class="col-5">
                                                <h2 class="steps">Step 2 - 5</h2>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-6 mb-3">
                                                <label class="fieldlabels">City: *</label> <br>

                                                <select name="" id="" class="submit-inputbox">
                                                    <option value="">City</option>
                                                    <option value="">Rawalpindi</option>
                                                    <option value="">Karachi</option>
                                                    <option value="">Islamabad</option>
                                                </select>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label class="fieldlabels">Area: *</label> <br>
                                                <input type="email" name="numberb" placeholder="Area"
                                                    class="submit-inputbox" />
                                            </div>

                                            <div class="col-md-12 mb-3">
                                                <label class="fieldlabels">Address: *</label>
                                                <textarea name="" id="" cols="30" rows="10" class="submit-inputbox"
                                                    style="height:200px"></textarea>
                                            </div>


                                        </div>
                                        <!-- row -->
                                    </div> <input type="button" name="next" class="next action-button" value="Next" />
                                    <input type="button" name="previous" class="previous action-button-previous"
                                        value="Previous" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <div class="row">
                                            <div class="col-7">
                                                <h2 class="fs-title">Features:</h2>
                                            </div>
                                            <div class="col-5">
                                                <h2 class="steps">Step 3 - 5</h2>
                                            </div>
                                        </div>



                                        <div class="row mt-3">
                                            <div class="col-md-4 mb-2">
                                                <label class="fieldlabels">Bedroom</label> <br>
                                                <input type="number" placeholder="Bedroom" class="submit-inputbox" />
                                            </div>
                                            <!-- col 4 -->
                                            <div class="col-md-4 mb-2">
                                                <label class="fieldlabels">Bathroom</label> <br>
                                                <input type="number" placeholder="Bathroom" class="submit-inputbox" />
                                            </div>
                                            <!-- col 4 -->

                                            <div class="col-md-4 mb-2">
                                                <label class="fieldlabels">Garages</label> <br>
                                                <input type="number" placeholder="Garages" class="submit-inputbox" />
                                            </div>
                                            <!-- col 4 -->
                                            <div class="col-md-4 mb-2">
                                                <label class="fieldlabels">Area Size</label> <br>
                                                <input type="number" placeholder="Garages" class="submit-inputbox" />
                                            </div>
                                            <!-- col 4 -->

                                            <div class="col-md-4 mb-2">
                                                <label class="fieldlabels">Area Unit</label> <br>
                                                <select name="" id="" class="submit-inputbox">
                                                    <option value="">Aera Unit</option>
                                                    <option value="">Square Meter</option>
                                                    <option value="">Marla</option>
                                                    <option value="">Kanal</option>
                                                </select>
                                            </div>
                                            <!-- col 4 -->

                                            <div class="col-md-4 mb-3">
                                                <label class="fieldlabels">Year Built</label> <br>
                                                <input type="number" placeholder="Year Built" class="submit-inputbox" />
                                            </div>
                                            <!-- col 4 -->
                                        </div>
                                        <!-- row -->

                                        <div class="row">
                                            <div class="col-md-2">
                                                <label class="fieldlabels">Gas</label>
                                                <input type="checkbox" placeholder="Garages" class="submit-inputbox" />
                                            </div>
                                            <!-- col 2 -->

                                            <div class="col-md-2">
                                                <label class="fieldlabels">Electricity</label>
                                                <input type="checkbox" placeholder="Garages" class="submit-inputbox" />
                                            </div>
                                            <!-- col 2 -->

                                            <div class="col-md-2">
                                                <label class="fieldlabels">Security</label>
                                                <input type="checkbox" placeholder="Garages" class="submit-inputbox" />
                                            </div>
                                            <!-- col 2 -->
                                            <div class="col-md-2">
                                                <label class="fieldlabels">Internet</label>
                                                <input type="checkbox" placeholder="Garages" class="submit-inputbox" />
                                            </div>
                                            <!-- col 2 -->

                                            <div class="col-md-2">
                                                <label class="fieldlabels">Parking Space</label>
                                                <input type="checkbox" placeholder="Garages" class="submit-inputbox" />
                                            </div>
                                            <!-- col 2 -->

                                            <div class="col-md-2">
                                                <label class="fieldlabels">Dining Room</label>
                                                <input type="checkbox" placeholder="Garages" class="submit-inputbox" />
                                            </div>
                                            <!-- col 2 -->
                                        </div>
                                        <!-- row -->
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label class="fieldlabels">Drawing Room</label>
                                                <input type="checkbox" placeholder="Garages" class="submit-inputbox" />
                                            </div>
                                            <!-- col 2 -->

                                            <div class="col-md-2">
                                                <label class="fieldlabels">Kitchen</label>
                                                <input type="checkbox" placeholder="Garages" class="submit-inputbox" />
                                            </div>
                                            <!-- col 2 -->

                                            <div class="col-md-2">
                                                <label class="fieldlabels">Tv Lounge</label>
                                                <input type="checkbox" placeholder="Garages" class="submit-inputbox" />
                                            </div>
                                            <!-- col 2 -->
                                            <div class="col-md-2">
                                                <label class="fieldlabels">Laundry Room</label>
                                                <input type="checkbox" placeholder="Garages" class="submit-inputbox" />
                                            </div>
                                            <!-- col 2 -->

                                            <div class="col-md-2">
                                                <label class="fieldlabels">Security Staff</label>
                                                <input type="checkbox" placeholder="Garages" class="submit-inputbox" />
                                            </div>
                                            <!-- col 2 -->

                                            <div class="col-md-2">
                                                <label class="fieldlabels">Store Room</label>
                                                <input type="checkbox" placeholder="Garages" class="submit-inputbox" />
                                            </div>
                                            <!-- col 2 -->
                                        </div>
                                        <!-- row -->

                                        <div class="row mt-3">
                                            <div class="col-lg-12">
                                                <h2 style="width:fit-content;margin:10px auto;margin-bottom:20px">Extra
                                                    Features</h2>
                                                <input type="text" id="tag-input1">
                                            </div>
                                        </div>
                                        <!-- row -->

                                    </div>
                                    <input type="button" name="next" class="next action-button" value="Next" />
                                    <input type="button" name="previous" class="previous action-button-previous"
                                        value="Previous" />
                                </fieldset>

                                <fieldset>
                                    <div class="form-card">
                                        <div class="row">
                                            <div class="col-7">
                                                <h2 class="fs-title">media:</h2>
                                            </div>
                                            <div class="col-5">
                                                <h2 class="steps">Step 4 - 5</h2>
                                            </div>
                                        </div>
                                        <div class="media-area-wrapper">
                                            <h3> Video (Youtube Embed link)</h3>
                                            <input type="text" placeholder="Youtube Embed Link "
                                                class="submit-inputbox mt-3" style="max-width:400px;">
                                            <br> <br>
                                            <h3> Featured Image</h3>


                                            <div class="wrapper">
                                                <div class="box">
                                                    <div class="js--image-preview"></div>
                                                    <div class="upload-options">
                                                        <label>
                                                            <input type="file" class="image-upload" accept="image/*" />
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="grid-x grid-padding-x">
                                                <div class="small-10 small-offset-1 medium-8 medium-offset-2 cell">
                                                    <br> <br>
                                                    <h3> Images(Maximum 8 Images)</h3>
                                                    <p class="mt-4">
                                                        <label for="upload_imgs" class="button hollow selectbtn">Select
                                                            Your Images +</label>
                                                        <input class="show-for-sr" type="file"
                                                            style="visibility:hidden;display:none" id="upload_imgs"
                                                            name="upload_imgs[]" multiple />
                                                    </p>
                                                    <div class="quote-imgs-thumbs quote-imgs-thumbs--hidden"
                                                        id="img_preview" aria-live="polite"></div>

                                                </div>
                                            </div>
                                            <div class="grid-x grid-padding-x">
                                                <div class="small-10 small-offset-1 medium-8 medium-offset-2 cell">
                                                    <br> <br>
                                                    <h3> VR Images(Maximum 8 Images)</h3>
                                                    <p class="mt-4">
                                                        <label for="upload_imgs2" class="button hollow selectbtn">Select
                                                            Your Images +</label>
                                                        <input class="show-for-sr" type="file"
                                                            style="visibility:hidden;display:none" id="upload_imgs2"
                                                            name="upload_imgs2[]" multiple />
                                                    </p>
                                                    <div class="quote-imgs-thumbs quote-imgs-thumbs--hidden"
                                                        id="img_preview2" aria-live="polite"></div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- media-area-wrapper -->


                                    </div>
                                    <input type="button" name="next" class="next action-button" value="Submit" />
                                    <input type="button" name="previous" class="previous action-button-previous"
                                        value="Previous" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <div class="row">
                                            <div class="col-7">
                                                <h2 class="fs-title">Finish:</h2>
                                            </div>
                                            <div class="col-5">
                                                <h2 class="steps">Step 5 - 5</h2>
                                            </div>
                                        </div> <br><br>
                                        <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                                        <div class="row justify-content-center">
                                            <div class="col-3"> <img src="assets/images/dashboard/tick.svg"
                                                    class="fit-image"> </div>
                                        </div> <br><br>
                                        <div class="row justify-content-center">
                                            <div class="col-7 text-center">
                                                <h5 class="purple-text text-center">You Have Successfully Submit your
                                                    property</h5>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- submit-property-main-section -->
    </div>
    <!-- content area -->


</div>
<!-- section -->
<script>
$(document).ready(function() {

    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;
    var current = 1;
    var steps = $("fieldset").length;

    setProgressBar(current);

    $(".next").click(function() {

        current_fs = $(this).parent();
        next_fs = $(this).parent().next();

        //Add Class Active
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

        //show the next fieldset
        next_fs.show();
        //hide the current fieldset with style
        current_fs.animate({
            opacity: 0
        }, {
            step: function(now) {
                // for making fielset appear animation
                opacity = 1 - now;

                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                next_fs.css({
                    'opacity': opacity
                });
            },
            duration: 500
        });
        setProgressBar(++current);
    });

    $(".previous").click(function() {

        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();

        //Remove class active
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

        //show the previous fieldset
        previous_fs.show();

        //hide the current fieldset with style
        current_fs.animate({
            opacity: 0
        }, {
            step: function(now) {
                // for making fielset appear animation
                opacity = 1 - now;

                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                previous_fs.css({
                    'opacity': opacity
                });
            },
            duration: 500
        });
        setProgressBar(--current);
    });

    function setProgressBar(curStep) {
        var percent = parseFloat(100 / steps) * curStep;
        percent = percent.toFixed();
        $(".progress-bar")
            .css("width", percent + "%")
    }

    $(".submit").click(function() {
        return false;
    })

});
</script>

<script>
(function() {

    "use strict"


    // Plugin Constructor
    var TagsInput = function(opts) {
        this.options = Object.assign(TagsInput.defaults, opts);
        this.init();
    }

    // Initialize the plugin
    TagsInput.prototype.init = function(opts) {
        this.options = opts ? Object.assign(this.options, opts) : this.options;

        if (this.initialized)
            this.destroy();

        if (!(this.orignal_input = document.getElementById(this.options.selector))) {
            console.error("tags-input couldn't find an element with the specified ID");
            return this;
        }

        this.arr = [];
        this.input = document.createElement('input');
        this.wrapper = document.createElement('div');

        init(this);
        initEvents(this);

        this.initialized = true;
        return this;
    }

    // Add Tags
    TagsInput.prototype.addTag = function(string) {

        if (this.anyErrors(string))
            return;

        this.arr.push(string);
        var tagInput = this;

        var tag = document.createElement('span');
        tag.className = this.options.tagClass;
        tag.innerText = string;

        var closeIcon = document.createElement('a');
        closeIcon.innerHTML = '&times;';

        // delete the tag when icon is clicked
        closeIcon.addEventListener('click', function(e) {
            e.preventDefault();
            var tag = this.parentNode;

            for (var i = 0; i < tagInput.wrapper.childNodes.length; i++) {
                if (tagInput.wrapper.childNodes[i] == tag)
                    tagInput.deleteTag(tag, i);
            }
        })


        tag.appendChild(closeIcon);
        this.wrapper.insertBefore(tag, this.input);
        this.orignal_input.value = this.arr.join(',');

        return this;
    }

    // Delete Tags
    TagsInput.prototype.deleteTag = function(tag, i) {
        tag.remove();
        this.arr.splice(i, 1);
        this.orignal_input.value = this.arr.join(',');
        return this;
    }

    // Make sure input string have no error with the plugin
    TagsInput.prototype.anyErrors = function(string) {
        if (this.options.max != null && this.arr.length >= this.options.max) {
            console.log('max tags limit reached');
            return true;
        }

        if (!this.options.duplicate && this.arr.indexOf(string) != -1) {
            console.log('duplicate found " ' + string + ' " ')
            return true;
        }

        return false;
    }

    // Add tags programmatically 
    TagsInput.prototype.addData = function(array) {
        var plugin = this;

        array.forEach(function(string) {
            plugin.addTag(string);
        })
        return this;
    }

    // Get the Input String
    TagsInput.prototype.getInputString = function() {
        return this.arr.join(',');
    }


    // destroy the plugin
    TagsInput.prototype.destroy = function() {
        this.orignal_input.removeAttribute('hidden');

        delete this.orignal_input;
        var self = this;

        Object.keys(this).forEach(function(key) {
            if (self[key] instanceof HTMLElement)
                self[key].remove();

            if (key != 'options')
                delete self[key];
        });

        this.initialized = false;
    }

    // Private function to initialize the tag input plugin
    function init(tags) {
        tags.wrapper.append(tags.input);
        tags.wrapper.classList.add(tags.options.wrapperClass);
        tags.orignal_input.setAttribute('hidden', 'true');
        tags.orignal_input.parentNode.insertBefore(tags.wrapper, tags.orignal_input);
    }

    // initialize the Events
    function initEvents(tags) {
        tags.wrapper.addEventListener('click', function() {
            tags.input.focus();
        });


        tags.input.addEventListener('keydown', function(e) {
            var str = tags.input.value.trim();

            if (!!(~[9, 13, 188].indexOf(e.keyCode))) {
                e.preventDefault();
                tags.input.value = "";
                if (str != "")
                    tags.addTag(str);
            }

        });
    }


    // Set All the Default Values
    TagsInput.defaults = {
        selector: '',
        wrapperClass: 'tags-input-wrapper',
        tagClass: 'tag',
        max: null,
        duplicate: false
    }

    window.TagsInput = TagsInput;

})();

var tagInput1 = new TagsInput({
    selector: 'tag-input1',
    duplicate: false,
    max: 20
});
tagInput1.addData()
</script>

<script>
function initImageUpload(box) {
    let uploadField = box.querySelector('.image-upload');

    uploadField.addEventListener('change', getFile);

    function getFile(e) {
        let file = e.currentTarget.files[0];
        checkType(file);
    }

    function previewImage(file) {
        let thumb = box.querySelector('.js--image-preview'),
            reader = new FileReader();

        reader.onload = function() {
            thumb.style.backgroundImage = 'url(' + reader.result + ')';
        }
        reader.readAsDataURL(file);
        thumb.className += ' js--no-default';
    }

    function checkType(file) {
        let imageType = /image.*/;
        if (!file.type.match(imageType)) {
            throw 'Datei ist kein Bild';
        } else if (!file) {
            throw 'Kein Bild gewählt';
        } else {
            previewImage(file);
        }
    }

}

// initialize box-scope
var boxes = document.querySelectorAll('.box');

for (let i = 0; i < boxes.length; i++) {
    let box = boxes[i];
    initDropEffect(box);
    initImageUpload(box);
}



/// drop-effect
function initDropEffect(box) {
    let area, drop, areaWidth, areaHeight, maxDistance, dropWidth, dropHeight, x, y;

    // get clickable area for drop effect
    area = box.querySelector('.js--image-preview');
    area.addEventListener('click', fireRipple);

    function fireRipple(e) {
        area = e.currentTarget
        // create drop
        if (!drop) {
            drop = document.createElement('span');
            drop.className = 'drop';
            this.appendChild(drop);
        }
        // reset animate class
        drop.className = 'drop';

        // calculate dimensions of area (longest side)
        areaWidth = getComputedStyle(this, null).getPropertyValue("width");
        areaHeight = getComputedStyle(this, null).getPropertyValue("height");
        maxDistance = Math.max(parseInt(areaWidth, 10), parseInt(areaHeight, 10));

        // set drop dimensions to fill area
        drop.style.width = maxDistance + 'px';
        drop.style.height = maxDistance + 'px';

        // calculate dimensions of drop
        dropWidth = getComputedStyle(this, null).getPropertyValue("width");
        dropHeight = getComputedStyle(this, null).getPropertyValue("height");

        // calculate relative coordinates of click
        // logic: click coordinates relative to page - parent's position relative to page - half of self height/width to make it controllable from the center
        x = e.pageX - this.offsetLeft - (parseInt(dropWidth, 10) / 2);
        y = e.pageY - this.offsetTop - (parseInt(dropHeight, 10) / 2) - 30;

        // position drop and animate
        drop.style.top = y + 'px';
        drop.style.left = x + 'px';
        drop.className += ' animate';
        e.stopPropagation();

    }
}
</script>
<script>
var imgUpload = document.getElementById('upload_imgs'),
    imgPreview = document.getElementById('img_preview'),
    imgUploadForm = document.getElementById('img-upload-form'),
    totalFiles, previewTitle, previewTitleText, img;

imgUpload.addEventListener('change', previewImgs, false);
imgUploadForm.addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Images Uploaded! (not really, but it would if this was on your website)');
}, false);

function previewImgs(event) {
    totalFiles = imgUpload.files.length;

    if (!!totalFiles) {
        imgPreview.classList.remove('quote-imgs-thumbs--hidden');
        previewTitle = document.createElement('p');
        previewTitle.style.fontWeight = 'bold';
        previewTitleText = document.createTextNode(totalFiles + '  Images Selected');
        previewTitle.appendChild(previewTitleText);
        imgPreview.appendChild(previewTitle);
    }

    for (var i = 0; i < totalFiles; i++) {
        img = document.createElement('img');
        img.src = URL.createObjectURL(event.target.files[i]);
        img.classList.add('img-preview-thumb');
        imgPreview.appendChild(img);
    }
}
</script>

<script>
var imgUpload2 = document.getElementById('upload_imgs2'),
    imgPreview2 = document.getElementById('img_preview2'),
    imgUploadForm2 = document.getElementById('img-upload-form'),
    totalFiles2, previewTitle2, previewTitleText2, img2;

imgUpload2.addEventListener('change', previewImgs, false);
imgUploadForm2.addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Images Uploaded! (not really, but it would if this was on your website)');
}, false);

function previewImgs(event) {
    totalFiles2 = imgUpload2.files.length;

    if (!!totalFiles2) {
        imgPreview2.classList.remove('quote-imgs-thumbs--hidden');
        previewTitle2 = document.createElement('p');
        previewTitle2.style.fontWeight = 'bold';
        previewTitleText2 = document.createTextNode(totalFiles2 + '  Images Selected');
        previewTitle2.appendChild(previewTitleText2);
        imgPreview2.appendChild(previewTitle2);
    }

    for (var i = 0; i < totalFiles2; i++) {
        img2 = document.createElement('img');
        img2.src = URL.createObjectURL(event.target.files[i]);
        img2.classList.add('img-preview-thumb');
        imgPreview2.appendChild(img2);
    }
}
</script>
<?php include 'incl/footer.php'; ?>