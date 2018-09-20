<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>iQMS</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- bootstrap
    ================================================== -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/css/bootstrap-select.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/js/bootstrap-select.js"></script>
</head>

<body id="top">

    <!-- header
    ================================================== -->
    <header class="s-header">

        <div class="header-logo">
            <a class="site-logo" href="index.html">
                <img src="images/logo-vnpt.png" alt="Homepage">
            </a>
        </div>

        <nav class="header-nav">

            <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>

            <div class="header-nav__content">
                <h3>Navigation</h3>
                
                <ul class="header-nav__list">
                    <li><a class="smoothscroll"  href="#booking" title="booking">Đặt lịch</a></li>
                </ul>
    
                
    
                <ul class="header-nav__social">
                    <li>
                        <a href="https://www.facebook.com/VNPTIT"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                    </li>
                </ul>

            </div> <!-- end header-nav__content -->

        </nav>  <!-- end header-nav -->

        <a class="header-menu-toggle" href="#0">
            <span class="header-menu-text">Menu</span>
            <span class="header-menu-icon"></span>
        </a>

    </header> <!-- end s-header -->   

    <!-- booking
    ================================================== -->
    <section id="booking" class="s-contact">

        <div class="overlay"></div>
        <div class="contact__line"></div>

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">ĐẶT LỊCH</h3>
                <h2 class="display-2 display-2--light">Hãy điền các thông tin đặt lịch</h2>
            </div>
        </div>

        <div class="row contact-content" data-aos="fade-up">
            
            <div class="contact-primary">

                <h3 class="h6">Gửi thông tin đặt lịch</h3>

                <form name="contactForm" id="contactForm" method="post" action="" novalidate="novalidate">
                    <fieldset>
    
                    <div class="form-field">
                        <input name="phone" type="text" id="phone" placeholder="Số điện thoại" value="+84" minlength="2" required="" aria-required="true" class="full-width phone">
                    </div>
                    <div class="form-field">
                        <select style="width: 400px; background-color: black" data-show-subtext="true"  id="stores" data-toggle="modal" data-target="#positionModal"> 
                            <option value="0" selected>Chọn cửa hàng</option>
                        </select>
                    </div>
                    <div class="form-field" >
                        <select  style="width: 400px;  background-color: black" data-show-subtext="true" id="services">
                            <option value="0">Chọn dịch vụ</option>                           
                        </select>
                    </div>
                    <div class="form-field">
                            <select class="livesearch" style="width: 400px;  background-color: black" data-show-subtext="true" data-live-search="true" id="dateBooking" onchange="getTimeAllowBooking(this)">
                                <option value="0">Chọn ngày đặt lịch</option>                           
                            </select>
                    </div>
                    <div class="form-field">
                        <select class="livesearch" style="width: 400px;  background-color: black" data-show-subtext="true" data-live-search="true" id="timeBooking">
                            <option value="0">Chọn thời điểm đặt lịch</option>                           
                        </select>
                    </div>                    
                    <!-- <div class="form-field">
                        <textarea name="contactMessage" id="contactMessage" placeholder="Your Message" rows="10" cols="50" required="" aria-required="true" class="full-width"></textarea>
                    </div> -->
                    <div class="form-field">
                        <button id="btnSubmit" class="full-width btn--primary">Đặt lịch</button>
                        <div class="submit-loader">
                            <div class="text-loader">Đang gửi thông tin...</div>
                            <div class="s-loader">
                                <div class="bounce1"></div>
                                <div class="bounce2"></div>
                                <div class="bounce3"></div>
                            </div>
                        </div>
                    </div>
    
                    </fieldset>
                </form>  
                <!-- contact-warning -->
                <div class="message-warning">
                    Có một vài thông tin không hợp lệ. Bạn hãy thử lại!
                </div> 
            
                <!-- contact-success -->                
                <div class="message-success">
                    Đặt lịch thành công, cảm ơn bạn!<br>
                </div>

            </div> <!-- end contact-primary -->

            <div class="contact-secondary">
                <div class="contact-info">

                    <h3 class="h6 hide-on-fullwidth">Thông tin cửa hàng</h3>
                    <div id="storeImage">
                    </div>                    
                    <div class="cinfo">
                        <h5>Tên cửa hàng</h5>
                        <p id="storeName">
                            <span id="storeAddress"> 1600 Le Duan</span>                                                    
                        </p>
                    </div>

                    <div class="cinfo">
                        <h5>Địa chỉ</h5>
                        <p>
                           <span id="storeAddress"> Ho Chi Minh</span>                           
                        </p>
                    </div>

                    <div class="cinfo">
                        <h5>Số điện thoại</h5>
                        <p>
                           <span id="storePhone">  Phone: (+84) 555 1212</span>
                            <br>                           
                        </p>
                    </div>

                    <ul class="contact-social">
                        <li>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                        </li>
                    </ul> <!-- end contact-social -->

                </div> <!-- end contact-info -->
            </div> <!-- end contact-secondary -->

        </div> <!-- end contact-content -->

    </section> <!-- end s-contact -->    
      <!-- Modal -->
    <div class="modal fade" id="positionModal" role="dialog">
        <div class="modal-dialog">        
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Chọn vị trí cửa hàng</h4>
                </div>
                <div class="modal-body">
                    <div class="form-field">
                        <label>Tỉnh/TP: </label>
                        <select id="sltProvince" class="selectpicker" data-show-subtext="true" data-live-search="true" style="font-size: 14px" onchange="getDistrict(this)"> 
                            <option value="0" selected>Chọn Tỉnh/TP</option>                          
                        </select>
                    </div>
                    <br>
                    <div class="form-field" id="district">
                        <label>Quận/huyện: </label>
                        <select id="sltDistrict" data-show-subtext="true" data-live-search="true" style="font-size: 14px; display: initial"> 
                            <option value="0" selected>Chọn quận/huyện</option>                      
                        </select>
                    </div>
                    <br>
                    <div class="form-field">
                        <label>Cửa hàng: </label>
                        <select id="sltStores"> 
                            <option value="0" selected>Chọn cửa hàng</option>                            
                        </select>
                    </div>
                    <br>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng lại</button>
                <button type="button" class="btn btn-success" data-dismiss="modal">Đồng ý</button>
                </div>
            </div>        
        </div>
    </div>

    <!-- footer
    ================================================== -->
    <footer>

        <!-- <div class="row footer-main">

            <div class="col-six tab-full left footer-desc">

                <div class="footer-logo"></div>
                Proin eget tortor risus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla porttitor accumsan tincidunt. Nulla porttitor accumsan tincidunt. Quaerat voluptas autem necessitatibus vitae aut.

            </div>

            <div class="col-six tab-full right footer-subscribe">

                <h4>Get Notified</h4>
                <p>Quia quo qui sed odit. Quaerat voluptas autem necessitatibus vitae aut non alias sed quia. Ut itaque enim optio ut excepturi deserunt iusto porro.</p>

                <div class="subscribe-form">
                    <form id="mc-form" class="group" novalidate="true">
                        <input type="email" value="" name="EMAIL" class="email" id="mc-email" placeholder="Email Address" required="">
                        <input type="submit" name="subscribe" value="Subscribe">
                        <label for="mc-email" class="subscribe-message"></label>
                    </form>
                </div>

            </div>

        </div> end footer-main -->

        <div class="row footer-bottom">

            <div class="col-twelve">
                <div class="copyright">
                    <span>© Copyright VNPT 2018</span> 
                    <span>Site Template by <a href="http://riweb247.com">Riweb247</a></span>	
                </div>

                <div class="go-top">
                    <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon-arrow-up" aria-hidden="true"></i></a>
                </div>
            </div>

        </div> <!-- end footer-bottom -->

    </footer> <!-- end footer -->


    <!-- photoswipe background
    ================================================== -->
    <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">

            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title=
                    "Share"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title=
                    "Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title=
                "Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>

        </div>

    </div> <!-- end photoSwipe background -->


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">
            <div class="line-scale-pulse-out">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>


    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script> 
    <script>
        // getStores();
        postBooking();
        getProvince();
        // getServices();
        $('#stores').change(function(){
            var item = $(this);            
            getServices(item.val());
            getDateAllowBooking(item.val());
            getInfoOneStore(item.val());
        });
        //Get list of Stores
        function getStores(){                     
                var url = 'action/getStores.php';   
                var html = '';             
                $.ajax({
                url: url,
                type:'GET',
                dataType : 'json',
                success: function(value){                                           
                    if(value.errorCode == 0){                                      
                            $.each (value.data.storeList, function (key, item) {            
                                console.log(item['id']);    
                                console.log(item['name']);
                                html = "<option value='"+item['id']+"'>"+item['name']+"</option>";
                                $('#stores').append(html);
                            });
                    }else{
                        console.log("Lỗi lấy danh sách cửa hàng");
                    }
                },
                error: function(){
                    console.log("Lỗi lấy danh sách cửa hàng");
                }
            });
        }

        //Get list of Service
        function getServices(storeId){             
            // alert(store.value);
            var url = 'action/getServices.php';   
            var html = '';             
                $.ajax({
                    url: url,
                    type:'GET',
                    data: {storeId : storeId},
                    dataType : 'json',
                    success: function(value){        
                        $('#services').empty();                
                        if(value.errorCode == 0){        
                            // console.log(JSON.stringify(value));
                                $.each (value.data.serviceList, function (key, item) {                                           
                                    html =  "<option value='0'>Chọn dịch vụ</option>"+ 
                                            "<option value='"+item['serviceId']+"'>"+item['serviceName']+"</option>";
                                    $('#services').append(html);
                                });
                        }else{
                            console.log("Lỗi lấy danh sách dịch vụ");
                        }
                    },
                    error: function(){
                        console.log("Lỗi lấy danh sách dịch vụ");
                    }
                });
        }

        //Get Date Allow Booking 
        function getDateAllowBooking(storeId){            
            var url = 'action/dateBooking.php';   
                var html = '';             
                $.ajax({
                url: url,
                type:'POST',
                data: {storeId : storeId},
                dataType : 'json',
                success: function(value){                        
                    if(value.errorCode == 0){        
                        $('#dateBooking').empty();
                        // console.log(JSON.stringify(value));
                            $.each (value.data.allowedDateList, function (key, item) {            
                                html =  "<option value='0'>Chọn ngày đặt lịch</option>"+ 
                                        "<option value='"+item+"'>"+item+"</option>";
                                $('#dateBooking').append(html);
                            });
                    }else{
                        console.log("Lỗi lấy danh sách ngày đặt lịch");
                    }
                },
                error: function(){
                    console.log("Lỗi lấy danh sách ngày đặt lịch");
                }
            });
        }
        //Get Time Allow Booking
        function getTimeAllowBooking(date){            
            var url = 'action/timeBooking.php';   
                var html = '';       
                var storeId = $('#stores').val();                 
                $.ajax({
                url: url,
                type:'POST',
                data: {storeId: storeId, date : date.value},
                dataType : 'json',
                success: function(value){     
                    $('#timeBooking').empty();                   
                    if(value.errorCode == 0){        
                        console.log(JSON.stringify(value));
                            $.each (value.data.allowedTimeList, function (key, item) {            
                                html =  "<option value='0'>Chọn thời điểm</option>"+
                                        "<option value='"+item['timeFrom']+"," +item['timeTo']+"'>"+item['timeFrom']+ " - " + item['timeTo'] +"</option>";
                                $('#timeBooking').append(html);
                            });
                    }else{
                        console.log("Lỗi lấy danh sách thời điểm đặt lịch");
                    }
                },
                error: function(){
                    console.log("Lỗi lấy danh sách thời điểm đặt lịch");
                }
            });
        }
        //Booking 
        function postBooking(){
            $('#btnSubmit').click(function(event){
                event.preventDefault();
                var phone = $('#phone').val();
                var storeId = $('#stores').val();
                var serviceId = $('#services').val();
                var date = $('#dateBooking').val();
                var time = $('#timeBooking').val();
                var timeFrom = time.split(",")[0];
                var timeTo = time.split(",")[1];
                var html = "";
                console.log(phone +" "+ storeId + " "+ serviceId + " " + date + " " + time + "  " + timeFrom + " " + timeTo);               
                var url = 'action/booking.php';    
                var sLoader = $('.submit-loader');                      
                $.ajax({
                    url: url,
                    type:'POST',
                    data: {phone: phone, storeId : storeId, serviceId: serviceId, date: date, timeFrom: timeFrom, timeTo: timeTo},
                    dataType : 'json',
                    beforeSend: function() {    
                        sLoader.slideDown("slow");
                    }, 
                    success: function(value){     
                        console.log(JSON.stringify(value));
                        if((phone == "" || phone == null) || storeId == 0 || serviceId == 0 || date == 0 || time == 0){
                            sLoader.slideUp("slow");  
                            $('.message-warning').html("Vui lòng điền đầy đủ thông tin");
                            $('.message-warning').slideDown("slow");   
                        }else{
                            if(value.errorCode == 0){ 
                                sLoader.slideUp("slow");  
                                $('.message-warning').fadeOut();      
                                $('.message-success').fadeIn();
                            }else if(value.errorCode == 2){
                                sLoader.slideUp("slow");  
                                $('.message-success').fadeOut();
                                $('.message-warning').html(value.errorMsg);
                                $('.message-warning').slideDown("slow");
                            }else if(value.errorCode == 6){
                                sLoader.slideUp("slow");  
                                $('.message-success').fadeOut();
                                $('.message-warning').html("Số điện thoại này chưa tồn tại");
                                $('.message-warning').slideDown("slow");                            
                            }else{
                                sLoader.slideUp("slow");      
                                $('.message-success').fadeOut();                       
                                $('.message-warning').slideDown("slow");                                                        
                            }
                        }
                    },
                    error: function(){
                        sLoader.slideUp("slow");                         
                        $('.message-warning').slideDown("slow");
                        console.log("Lỗi đặt lịch");
                    }
                });
            });
        }
        //Get list of one Stores
        function getInfoOneStore(storeId){                     
                var url = 'action/getInfoOneStore.php';   
                var html = '';             
                $.ajax({
                url: url,
                type:'GET',
                data: {storeId: storeId},
                dataType : 'json',
                success: function(value){                        
                    if(value.errorCode == 0){        
                        console.log(JSON.stringify(value));    
                            $("#storeImage").empty();
                            html = "<img src="+ value.data.storeInfo.pictureUrl+" height='50' width='100'>";
                            $("#storeImage").append(html);
                            $("#storeName").text(value.data.storeInfo.storeName);
                            $("#storeAddress").text(value.data.storeInfo.address);
                            $("#storePhone").text(value.data.storeInfo.phone);                        
                    }else{
                        console.log("Lỗi lấy thông tin cửa hàng");
                    }
                },
                error: function(){
                    console.log("Lỗi lấy thông tin cửa hàng");
                }
            });
        }
        //Get province
        function getProvince(){
            var url = 'action/getProvince.php';   
                var html = '';             
                $.ajax({
                url: url,
                type:'GET',
                dataType : 'json',
                success: function(value){                                           
                    if(value.errorCode == 0){                                      
                            $.each (value.data.provinceList, function (key, item) {                                            
                                html = "<option value='"+item['provinceId']+"'>"+item['provinceName']+"</option>";
                                $('#sltProvince').append(html);
                            });
                    }else{
                        console.log("Lỗi lấy danh sách Tỉnh/TP");
                    }
                },
                error: function(){
                    console.log("Lỗi lấy danh sách Tỉnh/TP");
                }
            });
        }
        //Get district
        function getDistrict(proId){            
            var url = 'action/getDistrict.php';   
                var html = '';             
            $.ajax({
                url: url,
                type:'GET',
                data: {provinceId : proId.value},
                dataType : 'json',
                success: function(value){ 
                    $('#sltDistrict').empty();                                          
                    if(value.errorCode == 0){                            
                            $.each (value.data.districtList, function (key, item) {                                 
                                html = "<option value='"+item['districtId']+"'>"+item['districtName']+"</option>";                                
                                $('#sltDistrict').append(html);
                            });
                    }else{
                        console.log("Lỗi lấy danh sách quận/huyện");
                    }
                },
                error: function(){
                    console.log("Lỗi lấy danh sách quận/huyện");
                }
            });
        }
    </script>    
</body>
</html>