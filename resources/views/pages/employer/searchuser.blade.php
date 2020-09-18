@extends('pages.layout-company')
@section('title','Thêm Công Việc')
@section('content')
<div class="tr-breadcrumb bg-image section-before">
    <div class="container">
        <div class="breadcrumb-info text-center">
            <div class="page-title">
                <h1 style="color: aliceblue;">Đăng Công Việc Mới</h1>
            </div>
            <ol class="breadcrumb">
                <li><a href="index.html">Trang chủ</a></li>
                <li class="active">Đăng công việc</li>
            </ol>
        </div>
    </div>
</div>
<div class="tr-post-job page-content">
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="s009">
                    <form>
                      <div class="inner-form">
                        <div class="basic-search">
                          <div class="input-field">
                            <input id="search" type="text" placeholder="Gõ tên vị trí nhân sự bạn muốn tìm VD : Developer Backend" />
                            <div class="icon-wrap">
                              <svg class="svg-inline--fa fa-search fa-w-16" fill="#ccc" aria-hidden="true" data-prefix="fas" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                              </svg>
                            </div>
                          </div>
                        </div>
                        <div class="advance-search">
                          <span class="desc">Tìm Kiếm Nâng Cao</span>
                          <div class="row">
                            <div class="input-field">
                              <div class="input-select">
                                <select data-trigger="" name="choices-single-defaul">
                                  <option placeholder="" value="">Khu Vực</option>
                                  <option>Subject b</option>
                                  <option>Subject c</option>
                                </select>
                              </div>
                            </div>
                            <div class="input-field">
                              <div class="input-select">
                                <select data-trigger="" name="choices-single-defaul">
                                  <option placeholder="" value="">Có những từ khóa</option>
                                  <option>Subject b</option>
                                  <option>Subject c</option>
                                </select>
                              </div>
                            </div>
                            
                          </div>
                        
                          <div class="row third">
                            <div class="input-field">
                              <div class="result-count">
                                <span>108 </span>results</div>
                              <div class="group-btn">
                                <button class="btn-delete" id="delete">RESET</button>
                                <button class="btn-search">SEARCH</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
            </div>

            <div class="col-md-3">
                <div class="section quick-rules">
                    <span class="tr-title">Quick Rules</span>
                    <p>Posting an ad on <a href="#">Seeker.com</a> is free! However, all post must follow our rules:</p>
                    <ul class="tr-list">
                        <li>Make sure you post in the correct category.</li>
                        <li>Do not post the same ad more than once or repost an ad within 48 hours.</li>
                        <li>Do not upload pictures with watermarks.</li>
                        <li>Do not post ads containing multiple items unless it's a package deal.</li>
                        <li>Do not put your email or phone numbers in the title or description.</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>
<script !src="">
    function show1(){
        document.getElementById('div1').style.display ='block';
        document.getElementById('div2').style.display ='none';
    }
    function show2(){
        document.getElementById('div2').style.display = 'block';
    }
    function show3(){
        document.getElementById('div1').style.display ='block';
        document.getElementById('div2').style.display ='none';
    }
</script>
@endsection