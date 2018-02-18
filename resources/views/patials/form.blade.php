<section class="form">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12 ">
                <div class="sides">
                    <p>Join 17.000+ Community members witch already bought KALLYAS!</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="d-flex justify-content-center algin-items-center">
                    <div class="form-inner">   
                         <h2>@lang('site.contact_us')</h2>
                        {{ Form::open(array('route' => array('contact'))) }}
                        {{ csrf_field() }}
                           <div class="form-group">
                               <label for="product">@lang('site.f_name')
                               <input type="text" class="form-control" id="product" >
                               </label>
                           </div>
                           <div class="form-group">
                               <label for="name">@lang('site.f_email')
                               <input type="text" class="form-control" id="name" name="name" >
                               </label>
                           </div>
                           <div class="form-group">
                               <label for="email">@lang('site.f_phone')
                               <input type="email" class="form-control" id="email" name="Email" >
                               </label>
                           </div>
                           <div class="form-group">
                                <label for="message">@lang('site.f_message')
                                <textarea class="form-control" id="message" name="message" cols="50" rows="5"></textarea>  
                                </label>
                            </div>
                          <button class="btn-blue send">@lang('site.f_send')</button>
                          {{ Form::close() }}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="sides">
                   <h4>Contact details</h4> 
                  <ul>
                      <li>Email:<span>youremail@address.com</span></li>
                      <li>phone:<span>78965431</span></li>
                      <li>Map:<span></span></li>
                  </ul>                 
                </div>
            </div>
        </div>
    </div>
  </section>