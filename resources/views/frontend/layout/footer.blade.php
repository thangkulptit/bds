<footer class="footer" role="contentinfo">
    <h1 class="footer__title">Thông báo lưu trú</h1>
        <div class="footer__content">
        <p>Nhận tin tức mới nhất của GreenCenterVillass Hà Nội</p>
    </div>
        <ul class="footer__social">
            <li class="footer__social__item">
                <a class="footer__social__link footer__social__link--twitter" target="_blank" href="#" rel="external">Twitter</a>
            </li>
            <li class="footer__social__item">
                <a class="footer__social__link footer__social__link--facebook" target="_blank" href="#" rel="external">Facebook</a>
            </li>
            <li class="footer__social__item">
                <a class="footer__social__link footer__social__link--instagram" target="_blank" href="#" rel="external"><i class="fa fa-instagram"></i></a>
            </li>
            <li class="footer__social__item">
                <a class="footer__social__link footer__social__link--youtube" target="_blank" href="#" rel="external"><i class="fa fa-youtube-play"></i></a>
            </li>
    </ul>
    <div class="contact-phone-ring">
        <div class="phonering-alo-phone phonering-alo-green phonering-alo-show" id="phonering-alo-phoneIcon">
            <div class="phonering-alo-ph-circle"></div>
             <div class="phonering-alo-ph-circle-fill"></div>
            <a href="tel:+{{$phone_contact->phone}}" class="pps-btn-img"  title="Liên hệ">
             <div class="phonering-alo-ph-img-circle"></div>
             </a>
        </div>
    </div>
    <div class="contact-page">
        <button type="button" id="btn_form" class="btn btn-primary"><i class="glyphicon glyphicon-earphone"></i>  NHẬN THÔNG TIN DỰ ÁN</button>
    </div>

    <div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <form action="">
        <div class="modal-header">
        <h2>Đăng ký thông tin để nhận thông tin dự án tại FORM này để nhận những thông tin đầy đủ nhất(SĐT: {{$phone_contact->phone}})</h2>
        <span class="close">&times;</span>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <div id="msg_response" style="visibility: hidden;" class="alert alert-success" role="alert">
                    This is a success alert—check it out!
                </div>
            </div>
            <div class="form-group">
                <input type="text" id="name" class="form-control" placeholder="Họ tên (*)" required>
            </div>
            <label for="">Email</label>
            <div class="form-group">
                <input type="email" id="email" class="form-control" placeholder="Email (*)" required>
            </div>
            <label for="">SĐT</label>
            <div class="form-group">
                <input type="text" id="sdt" class="form-control" placeholder="Số điện thoại (*)" required>
            </div>
            <label for="">Dự án quan tâm</label>
            <div class="form-group">
                <input type="text" id="quantam" class="form-control" placeholder="Dự án quan tâm (*)" required>
            </div>
            <label for="">Nội dung</label>
            <div class="form-group">
                <textarea class="form-control" id="content_inbox" placeholder="Lời nhắn (*)"></textarea>
            </div>
        </div>
        <div class="modal-footer">
            <div class="flex">
                <button type="button" id="submit_inbox_contact" class="btn btn-primary">Đăng ký</button>
            </div>
        </div>
        @csrf
    </form>
    </div>
    </div>
    <script>
        // Get the modal
        var modal = document.getElementById("myModal");
        
        // Get the button that opens the modal
        var btn = document.getElementById("btn_form");
        
        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];
        
        // When the user clicks the button, open the modal 
        btn.onclick = function() {
          modal.style.display = "block";
        }
        
        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
          modal.style.display = "none";
        }
        
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        }
        </script>
</footer>