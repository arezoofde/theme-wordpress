<div class="services">
    <div class="container">
    
        <div class="row">
            <div class="col-md-4">
                <div class="desc">
                    <h4>دوره وردپرسی من!</h4>
                    <span>وردپرس چیست ؟</span>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                        از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و
                        سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود
                        ابزارهای کاربردی می باشد. کتابهای زیادی
                        در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان
                        را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه
                        ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.
                        در این صورت می توان امید داشت که تمام و دشواری موجود در
                        ارائه راهکارها و شرایط سخت تایپ به پایان رسد و زمان مورد
                        نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته
                        اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                    </p>
                    <div class="text-left">
                        <a href="#" class="site-btn ">جزئیات دوره</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-8">
                <?php $services = get_theme_mod('services',false); ?>
                <?php if(is_array($services) && !empty($services)): ?>
                <?php foreach($services as $service): ?>   
                        <div class="col-md-6 col-sm-6">
                        
                            <div class="item">
                                <img src="<?php echo $service['image'] ?>" alt="<?php echo $service['title'];  ?>" />
                                <span><?php echo $service['title'];  ?></span>
                                <p><?php echo $service['desc'] ?> </p>
                            </div>

                    </div>
                
                <?php endforeach ?>
                <?php endif ?>
                </div>
            </div>
        </div>
    </div>
