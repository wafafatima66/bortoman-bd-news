@include('layouts.header')
<!-- End Time Bar -->

<?php
    class BanglaConverter {
        public static $bn = array("১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০");
        public static $en = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0");
        
        public static function bn2en($number) {
            return str_replace(self::$bn, self::$en, $number);
        }
        
        public static function en2bn($number) {
            return str_replace(self::$en, self::$bn, $number);
        }
    }
?>
<!-- Feature Area -->
<div class="container">
    <div class="search_area">
        <div class="row">
            @foreach($votes->sortByDesc('id') as $vote)

                <div class="search_item">
                    <p class="title">প্রশ্নঃ {{$vote->question}}</p><br>
                    <p class="details"><strong>উত্তর</strong></p>
                    <p class="details">হ্যাঃ <?php echo BanglaConverter::en2bn($vote->yes);?> জন</p>
                    <p class="details">নাঃ <?php echo BanglaConverter::en2bn($vote->no);?> জন</p>
                    <p class="details">মন্তব্য নেইঃ <?php echo BanglaConverter::en2bn($vote->neutral);?> জন</p>
                </div>
                <br><br>

            @endforeach
                 
        </div>
    </div>
</div>


<div class="clear_fix"></div>


@include('layouts.footer')