<div class="type-747">

    <section class="section">
        <div class=" col-md-12">
            <!--Tabs Section-->
            <section class="property-details" style="background-image:url('images/image-21.jpg');">
                <div class="auto-container">
                    <div class="row clearfix">
                        <!--Left Column-->
                        <div class="col-md-7 col-sm-12 col-xs-12 left-column">
                            <h2>Property Details</h2>
                            <!--Tabs Box-->
                            <div class="tab">
                                <button class="tablinks active tab1">Exterior Details</button>
                                <button class="tablinks tab2">Room Dimensions</button>
                                <button class="tablinks tab3">Interior Details</button>
                            </div>

                            <div id="Exterior Details" class="tabcontent">
                                <h3>Exterior Details</h3>
                                <p>
                                    Real Estate agents are Property consisting of land and the buildings on it, along
                                    with its seds naturals resources such seds as crops, minerals, or water; immovable
                                    property of this nature.
                                    <div class="option">
                                    <div class="column col-md-4 col-sm-4 col-xs-12"><!--Styled List-->
                                                    <ul class="styled-list">
                                                        <li>Water Strg : 5000/ltr</li>
                                                        <li>No of Floors : 2</li>
                                                        <li>No Air Condition : 2</li>
                                                    </ul>
                                                </div>
                                                <div class="column col-md-4 col-sm-4 col-xs-12"><!--Styled List-->
                                                    <ul class="styled-list">
                                                        <li>Bathroom : 2</li>
                                                        <li>No of Stair : 4</li>
                                                        <li>No of Kitchen : 1</li>
                                                    </ul>
                                                </div>
                                                <div class="column col-md-4 col-sm-4 col-xs-12"><!--Styled List-->
                                                    <ul class="styled-list">
                                                        <li>Bedrooms : 2</li>
                                                        <li>Parking Capacity : 4</li>
                                                        <li>Swimming Pool : 1</li>
                                                    </ul>
                                                </div>
                                    </div>
                                </p>
                            </div>

                            <div id="Room Dimensions" class="tabcontent">
                                <h3>Room Dimensions</h3>
                                <p>
                                It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.
                                </p>
                            </div>

                            <div id="Interior Details" class="tabcontent">
                                <h3>Interior Details</h3>
                                <p>
                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="clearfix"></div>
    </section>

</div>
<script type="text/javascript">
    var buttons = document.getElementsByClassName('tablinks');
    var contents = document.getElementsByClassName('tabcontent');
    function showContent(id) {
        for (var i = 0; i < contents.length; i++) {
            contents[i].style.display = 'none';
        }
        var content = document.getElementById(id);
        content.style.display = 'block';
    }
    for (var i = 0; i < buttons.length; i++) {
        buttons[i].addEventListener("click", function () {
            var id = this.textContent;
            for (var i = 0; i < buttons.length; i++) {
                buttons[i].classList.remove("active");
            }
            this.className += " active";
            showContent(id);
        });
    }
    showContent('Exterior Details');
</script>