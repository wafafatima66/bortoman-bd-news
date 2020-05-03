<div class="footer_area">
    <div class="container">
        <div class="row">
            <div class="footer_menu">
                @php ($i = 0)
                @php ($count = 0)
                
                <div class="col-sm-3">
                    
                    <div class="footer_menu_item">
                        <ul>
                            @foreach($categories as $category)
                            <li>
                                <a href="{{route('single_category',['id'=>$category->id])}}">{{$category->name}}</a>
                            </li>
                            @php ($i=$i+1)
                            @if($i == 3)
                                @php($i = 0)
                                @php ($count = $count+1)
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-3">
                    
                    <div class="footer_menu_item">
                        <ul>
                            @endif
                            @if($count == 4)
                                @break
                            @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
                
                
                
                
               
            </div>
        </div>

        <div class="row logo_area">
            <div class="about_area">
                <div class="col-sm-12">
                    <div class="our_company">
                        
                        <ul>
                            <li>
                                <a href="http://aljameebd.com/" target="blank">
                                    <img src="{{asset('images/aljamee.png')}}" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="{{asset('images/dreamtex.png')}}" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="http://bortoman.tv/" target="blank">
                                    <img src="{{asset('images/tv.png')}}" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="{{asset('images/khan.png')}}" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="http://dti.com.bd/" target="blank">
                                    <img src="{{asset('images/dti.png')}}" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>


                <!-- <div class="col-sm-3">
                    <div class="about_us">
                        <p>BortomanBd24 is the one of the highest circulated and most read newspaper in Bangladesh</p>
                    </div>
                </div> -->
            </div>
        </div>


        <div class="row">
            <div class="footer_bottom">
                <div class="col-sm-4">
                    <div class="footer_logo">
                        <img src="images/logo.jpg" alt="">
                        <p>&copy; বর্তমান বাংলা মিডিয়া লিমিটেড কর্তৃক সর্বস্বত্ব সংরক্ষিত</p>
                    </div>
                </div>
                <div class="col-sm-8">

                    <div class="address">
                        <p>
                            <span>প্রকাশক: জাকির হোসেন খান</span><br>

                            <span>সম্পাদকঃ মোহাম্মদ জসিমউদ্দিন রুমান</span><br>

                            ঢাকা অফিসঃ বাড়ি নং-১৬ (২য় তলা), রোড নং-৬/এ, সেক্টর-৪, উত্তরা, ঢাকা-১২৩০, বাংলাদেশ  <br>

                            ফোনঃ ০২-৭৯১২৯৬২, মোবাইলঃ ০১৭১৬ ৩২৪৬৪০,<br>
                            ইমেইলঃ bortomanbd24@gmail.com
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>





<script type="text/javascript">
    $(function() {
        $('.tab1').tab();
        $('.tab2').tab({
            trigger_event_type: 'mouseover' //mouseover | click 默认click
        });
    });
</script>



<script type="text/javascript" href="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script type="text/javascript" href="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/ticker.js')}}"></script>
<script src="{{ asset('js/jQuery.tab.js')}}"></script>


</body>
</html>