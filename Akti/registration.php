<?php include('header.php'); ?>

<body>
  <div class="container box fadeInDown">
    <br />
    <!-- <h2 align="center">Azərbaycan Könüllü Təşkilatları İttifaqı</h2><br /> -->
    <form method="post" id="register_form" action="save">
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active_tab1" style="border:1px solid #ccc" id="list_login_details">Şəxsi məlumatlar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link inactive_tab1" id="list_personal_details" style="border:1px solid #ccc">Təhsil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link inactive_tab1" id="list_contact_details" style="border:1px solid #ccc">Əlaqə</a>
        </li>
      </ul>
      <div class="tab-content" style="margin-top:16px;">
        <div class="tab-pane active" id="login_details">
          <div class="panel panel-default">
            <div class="panel-heading">Şəxsi məlumatlar</div>
            <div class="panel-body">
              <div class="form-group">
                <label>Ad,soyad və ata adı:</label>
                <input type="text" name="ad" id="ad" class="form-control" />
                <span id="error_ad" class="text-danger"></span>
              </div>
              <div class="form-group">
                <label>Təvəllüdünüz:</label>
                <input type="date" placeholder="dd-mm-yyyy" name="yas" id="yas" class="form-control" max="2020-12-31" format="dd-mm-yyyy"/>
                <span id="error_yas" class="text-danger"></span>
              </div>

              <div class="form-group">
                <label>Şəxsiyyət vəsiqənizin seriyası:</label>
                  <input type="text" name="seriya" id="seriya" class="form-control" />
                <span id="error_seriya" class="text-danger"></span>
              </div>

              <div class="form-group">
                <label>Fin kodunuz:</label>
                <input type="text" name="fin" id="fin" class="form-control" />
                <span id="error_fin" class="text-danger"></span>
              </div>

              <div class="form-group">
                <label>Cinsiniz:</label>
                <label class="radio-inline">
                  <input type="radio" name="gender" value="Kişi" checked> Kişi
                </label>
                <label class="radio-inline">
                  <input type="radio" name="gender" value="Qadın"> Qadın
                </label>
              </div>
              <br />
              <div align="center">
                <button type="button" name="btn_login_details" id="btn_login_details" class="btn btn-info btn-lg">İrəli</button>
              </div>
              <br />
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="personal_details">
          <div class="panel panel-default">
            <div class="panel-heading">Təhsil</div>
            <div class="panel-body">
              <div class="form-group">
                <label>Təhsil aldığınız müəssisə:</label>
                <input type="text" name="tehsil" id="tehsil" class="form-control" />
                <span id="error_tehsil" class="text-danger"></span>
              </div>
              <div class="form-group">
                <label>İxtisasınız:</label>
                <input type="text" name="ixtisas" id="ixtisas" class="form-control" />
                <span id="error_ixtisas" class="text-danger"></span>
              </div>
              <div class="form-group">
                <label>Fakultə:</label>
                <input type="text" name="fakulte" id="fakulte" class="form-control" />
                <span id="error_fakulte" class="text-danger"></span>
              </div>
              <br />
              <div align="center">
                <button type="button" name="previous_btn_personal_details" id="previous_btn_personal_details" class="btn btn-default btn-lg">Geri</button>
                <button type="button" name="btn_personal_details" id="btn_personal_details" class="btn btn-info btn-lg">İrəli</button>
              </div>
              <br />
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="contact_details">
          <div class="panel panel-default">
            <div class="panel-heading">Əlaqə</div>
            <div class="panel-body">
              <div class="form-group">
                <label>Email adresiniz:</label>
                <input type="email" name="mail" id="mail" class="form-control" />
                <span id="error_mail" class="text-danger"></span>
              </div>
              <div class="form-group">
                <label>Əlaqə nömrəniz:</label>
                <input type="text" name="mobile_no" id="mobile_no" class="form-control" />
                <span id="error_mobile_no" class="text-danger"></span>
              </div>
              <br />
              <div align="center">
                <button type="button" name="previous_btn_contact_details" id="previous_btn_contact_details" class="btn btn-default btn-lg">Geri</button>
                <button type="submit" name="btn_contact_details" id="btn_contact_details" class="btn btn-success btn-lg" name="insertinto">Təsdiqlə</button>
              </div>
              <br />
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</body>

</html>

<script>
  $(document).ready(function() {

    $('#btn_login_details').click(function() {

      var error_ad = '';
      var error_password = '';
      var error_fin = '';
      var error_seriya = '';
      var seriyafiltir = ["Aze", "AZE", "AA", "aa"];


      if ($.trim($('#ad').val()).length == 0) {
        error_ad = 'Yalnış ad';
        $('#error_ad').text(error_ad);
        $('#ad').addClass('has-error');
      } else {
        error_ad = '';
        $('#error_ad').text(error_ad);
        $('#ad').removeClass('has-error');
      }
      if ($.trim($('#seriya').val()).length == 0) {
        error_seriya = 'Məlumatlarınızı daxil edin';
        $('#error_seriya').text(error_seriya);
        $('#seriya').addClass('has-error');
      } else {
        error_seriya = '';
        $('#error_seriya').text(error_seriya);
        $('#seriya').removeClass('has-error');
      }
      if ($.trim($('#yas').val()).length == 0) {
        error_yas = 'Təvəllüdünüzü daxil edin';
        $('#error_yas').text(error_yas);
        $('#yas').addClass('has-error');
      } else {
        error_yas = '';
        $('#error_yas').text(error_yas);
        $('#yas').removeClass('has-error');
      }


      if ($.trim($('#fin').val()).length == 0) {
        error_fin = 'Məlumatlarınızı daxil edin';
        $('#error_fin').text(error_fin);
        $('#fin').addClass('has-error');
      } else {
        if ($.trim($('#fin').val()).length != 7){
          error_fin = 'Məlumatlarınızı daxil edin';
        $('#error_fin').text(error_fin);
        $('#fin').addClass('has-error');
        }else{
        error_fin = '';
        $('#error_fin').text(error_fin);
        $('#fin').removeClass('has-error');
        }
      }




      if (error_ad != '' || error_yas != '' || error_fin != '' || error_seriya != '') {
        return false;
      } else {
        $('#list_login_details').removeClass('active active_tab1');
        $('#list_login_details').removeAttr('href data-toggle');
        $('#login_details').removeClass('active');
        $('#list_login_details').addClass('inactive_tab1');
        $('#list_personal_details').removeClass('inactive_tab1');
        $('#list_personal_details').addClass('active_tab1 active');
        $('#list_personal_details').attr('href', '#personal_details');
        $('#list_personal_details').attr('data-toggle', 'tab');
        $('#personal_details').addClass('active in');
      }
    });

    $('#previous_btn_personal_details').click(function() {
      $('#list_personal_details').removeClass('active active_tab1');
      $('#list_personal_details').removeAttr('href data-toggle');
      $('#personal_details').removeClass('active in');
      $('#list_personal_details').addClass('inactive_tab1');
      $('#list_login_details').removeClass('inactive_tab1');
      $('#list_login_details').addClass('active_tab1 active');
      $('#list_login_details').attr('href', '#login_details');
      $('#list_login_details').attr('data-toggle', 'tab');
      $('#login_details').addClass('active in');
    });

    $('#btn_personal_details').click(function() {
      var error_tehsil = '';
      var error_ixtisas = '';
      var error_fakulte = '';


      if ($.trim($('#tehsil').val()).length == 0) {
        error_tehsil = 'Təhsil aldığınız müəssisəni daxil edin';
        $('#error_tehsil').text(error_tehsil);
        $('#tehsil').addClass('has-error');
      } else {
        error_tehsil = '';
        $('#error_tehsil').text(error_tehsil);
        $('#tehsil').removeClass('has-error');
      }

      if ($.trim($('#ixtisas').val()).length == 0) {
        error_ixtisas = 'İxtisasınızı daxil edin';
        $('#error_ixtisas').text(error_ixtisas);
        $('#ixtisas').addClass('has-error');
      } else {
        error_last_name = '';
        $('#error_ixtisas').text(error_ixtisas);
        $('#ixtisas').removeClass('has-error');
      }
      if ($.trim($('#fakulte').val()).length == 0) {
        error_fakulte = 'Fakultənizi daxil edin';
        $('#error_fakulte').text(error_fakulte);
        $('#fakulte').addClass('has-error');
      } else {
        error_fakulte = '';
        $('#error_fakulte').text(error_fakulte);
        $('#fakulte').removeClass('has-error');
      }

      if (error_tehsil != '' || error_ixtisas != '' || error_fakulte != '') {
        return false;
      } else {
        $('#list_personal_details').removeClass('active active_tab1');
        $('#list_personal_details').removeAttr('href data-toggle');
        $('#personal_details').removeClass('active');
        $('#list_personal_details').addClass('inactive_tab1');
        $('#list_contact_details').removeClass('inactive_tab1');
        $('#list_contact_details').addClass('active_tab1 active');
        $('#list_contact_details').attr('href', '#contact_details');
        $('#list_contact_details').attr('data-toggle', 'tab');
        $('#contact_details').addClass('active in');
      }
    });

    $('#previous_btn_contact_details').click(function() {
      $('#list_contact_details').removeClass('active active_tab1');
      $('#list_contact_details').removeAttr('href data-toggle');
      $('#contact_details').removeClass('active in');
      $('#list_contact_details').addClass('inactive_tab1');
      $('#list_personal_details').removeClass('inactive_tab1');
      $('#list_personal_details').addClass('active_tab1 active');
      $('#list_personal_details').attr('href', '#personal_details');
      $('#list_personal_details').attr('data-toggle', 'tab');
      $('#personal_details').addClass('active in');
    });

    $('#btn_contact_details').click(function() {

      var error_mail = '';
      var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      var error_mobile_no = '';
      var mobile_validation = /^\d{10}$/;
      if ($.trim($('#mail').val()).length == 0) {
        error_mail = 'Email adresinizi daxil edin';
        $('#error_mail').text(error_mail);
        $('#mail').addClass('has-error');
      } else {
        if (!filter.test($('#mail').val())) {
          error_mail = 'Yalnış mail adress';
          $('#error_mail').text(error_mail);
          $('#error_mail').addClass('error_mail');
        } else {
          error_mail = '';
          $('#error_mail').text(error_mail);
          $('#mail').removeClass('has-error');
        }

      }

      if ($.trim($('#mobile_no').val()).length == 0) {
        error_mobile_no = 'Mobile Number is required';
        $('#error_mobile_no').text(error_mobile_no);
        $('#mobile_no').addClass('has-error');
      } else {
        if (!mobile_validation.test($('#mobile_no').val())) {
          error_mobile_no = 'Invalid Mobile Number';
          $('#error_mobile_no').text(error_mobile_no);
          $('#mobile_no').addClass('has-error');
        } else {
          error_mobile_no = '';
          $('#error_mobile_no').text(error_mobile_no);
          $('#mobile_no').removeClass('has-error');
        }
      }
      if (error_mail != '' || error_mobile_no != '') {
        return false;
      } else {
        //  $('#btn_contact_details').attr("disabled", "disabled");
        //  $(document).css('cursor', 'prgress');
        //  $("#register_form").submit();
      }

    });

  });
</script>