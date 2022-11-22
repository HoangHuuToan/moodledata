<?php

class __Mustache_8ba0dc604402fe8414f247781460e567 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('theme_moove/head')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<body ';
        $value = $this->resolveValue($context->find('bodyattributes'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '>
';
        if ($partial = $this->mustache->loadPartial('theme_moove/accessibilitybar')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('core/local/toast/wrapper')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '<div id="page-wrapper" class="d-print-block">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->findDot('output.standard_top_of_body_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_moove/navbar')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '
';
        $value = $context->find('courseindex');
        $buffer .= $this->section2ea462af77924166b6a954286652c7ce($context, $indent, $value);
        $value = $context->find('hasblocks');
        $buffer .= $this->sectionA04d2732b2e6f4f4127a4f6ff32c56c4($context, $indent, $value);
        $buffer .= '    <div id="page" data-region="mainpage" data-usertour="scroller" class="drawers ';
        $value = $context->find('courseindexopen');
        $buffer .= $this->section6b40e2748488de16028fd4032111cc9b($context, $indent, $value);
        $buffer .= ' ';
        $value = $context->find('blockdraweropen');
        $buffer .= $this->section05ab28b93094b30436e1224de5468efa($context, $indent, $value);
        $buffer .= ' drag-container">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '       <div class="course__body">
';
        $buffer .= $indent . '            <div class="course__container">
';
        $buffer .= $indent . '              <div class="container--left">
';
        $buffer .= $indent . '                <div class="course__heading">
';
        $buffer .= $indent . '                  <div class="course__title">';
        $value = $this->resolveValue($context->findDot('output.full_header'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '                  <div class="course__title">';
        $value = $this->resolveValue($context->find('name'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                  <div class="course__heading__content">
';
        $buffer .= $indent . '                    <div class="course__heading__item">
';
        $buffer .= $indent . '                      <i class="far fa-flag"></i>
';
        $buffer .= $indent . '                      <div class="course__heading__item__icon">
';
        $buffer .= $indent . '                        <p>Category: </p>
';
        $buffer .= $indent . '                        <h3>';
        $value = $this->resolveValue($context->findDot('result.category'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</h3>
';
        $buffer .= $indent . '                      </div>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    <div class="course__heading__item">
';
        $buffer .= $indent . '                      <img
';
        $buffer .= $indent . '                        src="https://images.unsplash.com/photo-1455390582262-044cdead277a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8YXV0aG9yfGVufDB8fDB8fA%3D%3D&w=1000&q=80"
';
        $buffer .= $indent . '                        alt=""
';
        $buffer .= $indent . '                      />
';
        $buffer .= $indent . '                      <div class="course__heading__item__icon">
';
        $buffer .= $indent . '                        <p>Giảng viên:</p>
';
        $buffer .= $indent . '                        <h3>';
        $value = $this->resolveValue($context->findDot('result.giangvien'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</h3>
';
        $buffer .= $indent . '                      </div>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                  </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '      
';
        $buffer .= $indent . '                <div class="course__tab">
';
        $buffer .= $indent . '                  <div class="tabs">
';
        $buffer .= $indent . '                    <div class="tablinks active" data-tab="info">
';
        $buffer .= $indent . '                      Thông tin cơ bản
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    <div class="tablinks" data-tab="course">Bài học</div>
';
        $buffer .= $indent . '                    <div class="tablinks" data-tab="fqa">Hỏi & Đáp</div>
';
        $buffer .= $indent . '                    <div class="tablinks" data-tab="more">Tài liệu khóa học</div>
';
        $buffer .= $indent . '                  </div>
';
        $buffer .= $indent . '                  <div class="wrapper_tabcontent">
';
        $buffer .= $indent . '                    <div id="info" class="tabcontent1 active description-course">';
        $value = $this->resolveValue($context->findDot('result.summary'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '      
';
        $buffer .= $indent . '                    <div id="course" class="tabcontent1">
';
        $buffer .= $indent . '                        <div id="topofscroll" class="main-inner">
';
        $buffer .= $indent . '                            <div class="coursecontentblocks">
';
        $buffer .= $indent . '                                ';
        $value = $this->resolveValue($context->find('addcontentblockbutton'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                                ';
        $value = $this->resolveValue($context->find('contentblocks'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                            <div class="drawer-toggles d-flex">
';
        $value = $context->find('courseindex');
        $buffer .= $this->sectionA3d831ef41333122d954f460904cec22($context, $indent, $value);
        $value = $context->find('hasblocks');
        $buffer .= $this->section9d80d34f8fdc1b82e9d1327d162175c1($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '                                
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                
';
        $buffer .= $indent . '                            <div id="page-content" class="d-print-block">
';
        $buffer .= $indent . '                                <div id="region-main-box">
';
        $value = $context->find('hasregionmainsettingsmenu');
        $buffer .= $this->sectionF7edf51d353fc9b2ab7c214d2c129a4d($context, $indent, $value);
        $buffer .= $indent . '                                    <section id="region-main" aria-label="';
        $value = $context->find('str');
        $buffer .= $this->section6b403a6a78537640b9e04a931aeb6463($context, $indent, $value);
        $buffer .= '">
';
        $value = $context->find('hasregionmainsettingsmenu');
        $buffer .= $this->section67f45638f293ea5451c088ad3899507a($context, $indent, $value);
        $buffer .= $indent . '                                        ';
        $value = $this->resolveValue($context->findDot('output.course_content_header'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $value = $context->find('headercontent');
        $buffer .= $this->sectionF19b31eb4082ad73416c75eac9c1ecd2($context, $indent, $value);
        $value = $context->find('overflow');
        $buffer .= $this->section9b44bc6cc4051c600f1ecae3f751ac2c($context, $indent, $value);
        $buffer .= $indent . '                
';
        $buffer .= $indent . '                                        ';
        $value = $this->resolveValue($context->findDot('output.main_content'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                                        ';
        $value = $this->resolveValue($context->findDot('output.activity_navigation'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                                        ';
        $value = $this->resolveValue($context->findDot('output.course_content_footer'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                
';
        $buffer .= $indent . '                                    </section>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '      
';
        $buffer .= $indent . '                    <div id="fqa" class="tabcontent1">
';
        $buffer .= $indent . '                        <div>
';
        $buffer .= $indent . '                          <details>
';
        $buffer .= $indent . '                            <summary>Câu hỏi 1</summary>
';
        $buffer .= $indent . '                            <p>Epcot is a theme park at Walt Disney World Resort featuring exciting attractions,
';
        $buffer .= $indent . '                             international pavilions, award-winning fireworks and seasonal special events.</p>
';
        $buffer .= $indent . '                          </details>
';
        $buffer .= $indent . '                          <details>
';
        $buffer .= $indent . '                            <summary>Câu hỏi 2</summary>
';
        $buffer .= $indent . '                            <p>Epcot is a theme park at Walt Disney World Resort featuring exciting attractions,
';
        $buffer .= $indent . '                             international pavilions, award-winning fireworks and seasonal special events.</p>
';
        $buffer .= $indent . '                          </details>
';
        $buffer .= $indent . '                          <details>
';
        $buffer .= $indent . '                            <summary>Câu hỏi 3</summary>
';
        $buffer .= $indent . '                            <p>Epcot is a theme park at Walt Disney World Resort featuring exciting attractions,
';
        $buffer .= $indent . '                             international pavilions, award-winning fireworks and seasonal special events.</p>
';
        $buffer .= $indent . '                          </details>
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    <div id="more" class="tabcontent1">More</div>
';
        $buffer .= $indent . '                  </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '      
';
        $buffer .= $indent . '                <div class="related__course">
';
        $buffer .= $indent . '                  <div class="relate__heading">Khóa học liên quan</div>
';
        $buffer .= $indent . '                  <div class="relate__course__container">
';
        $buffer .= $indent . '                    <div class="relate__item">
';
        $buffer .= $indent . '                      <img
';
        $buffer .= $indent . '                        src="https://bizflyportal.mediacdn.vn/thumb_wm/1000,100/bizflyportal/images/moo16323762193383.jpg"
';
        $buffer .= $indent . '                        alt=""
';
        $buffer .= $indent . '                      />
';
        $buffer .= $indent . '                      <div class="relate__item__content">
';
        $buffer .= $indent . '                        <p>Category 1</p>
';
        $buffer .= $indent . '                        <h3>Khoa hoc A</h3>
';
        $buffer .= $indent . '                        <div class="relate__item__icon">
';
        $buffer .= $indent . '                          <div>Hoang Duy</div>
';
        $buffer .= $indent . '                          <p>Free</p>
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                      </div>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    <div class="relate__item">
';
        $buffer .= $indent . '                      <img
';
        $buffer .= $indent . '                        src="https://bizflyportal.mediacdn.vn/thumb_wm/1000,100/bizflyportal/images/moo16323762193383.jpg"
';
        $buffer .= $indent . '                        alt=""
';
        $buffer .= $indent . '                      />
';
        $buffer .= $indent . '                      <div class="relate__item__content">
';
        $buffer .= $indent . '                        <p>Category 1</p>
';
        $buffer .= $indent . '                        <h3>Khoa hoc A</h3>
';
        $buffer .= $indent . '                        <div class="relate__item__icon">
';
        $buffer .= $indent . '                          <div>Hoang Duy</div>
';
        $buffer .= $indent . '                          <p>Free</p>
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                      </div>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    <div class="relate__item">
';
        $buffer .= $indent . '                      <img
';
        $buffer .= $indent . '                        src="https://bizflyportal.mediacdn.vn/thumb_wm/1000,100/bizflyportal/images/moo16323762193383.jpg"
';
        $buffer .= $indent . '                        alt=""
';
        $buffer .= $indent . '                      />
';
        $buffer .= $indent . '                      <div class="relate__item__content">
';
        $buffer .= $indent . '                        <p>Category 1</p>
';
        $buffer .= $indent . '                        <h3>Khoa hoc A</h3>
';
        $buffer .= $indent . '                        <div class="relate__item__icon">
';
        $buffer .= $indent . '                          <div>Hoang Duy</div>
';
        $buffer .= $indent . '                          <p>Free</p>
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                      </div>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                  </div>
';
        $buffer .= $indent . '                    <div>';
        $value = $this->resolveValue($context->findDot('listcourse.fullname'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '              </div>
';
        $buffer .= $indent . '      
';
        $buffer .= $indent . '              <div class="container--right">
';
        $buffer .= $indent . '                <div class="buy__course">MUA KHÓA HỌC</div>
';
        $buffer .= $indent . '                <ul class="course__info">
';
        $buffer .= $indent . '                  <li>
';
        $buffer .= $indent . '                    <p>Đã đăng ký: <b>11 học viên</b></p>
';
        $buffer .= $indent . '                    <i class="fas fa-user-graduate"></i>
';
        $buffer .= $indent . '                  </li>
';
        $buffer .= $indent . '                  <li>
';
        $buffer .= $indent . '                    <p>Thời lượng: <b>11 giờ</b></p>
';
        $buffer .= $indent . '                    <i class="fas fa-stopwatch"></i>
';
        $buffer .= $indent . '                  </li>
';
        $buffer .= $indent . '                  <li>
';
        $buffer .= $indent . '                    <p>Bài học: <b>5</b></p>
';
        $buffer .= $indent . '                    <i class="fas fa-book"></i>
';
        $buffer .= $indent . '                  </li>
';
        $buffer .= $indent . '                  <li>
';
        $buffer .= $indent . '                    <p>Video: <b>3 </b></p>
';
        $buffer .= $indent . '                    <i class="fas fa-play"></i>
';
        $buffer .= $indent . '                  </li>
';
        $buffer .= $indent . '                  <li>
';
        $buffer .= $indent . '                    <p>Trình độ: <b>Sơ cấp</b></p>
';
        $buffer .= $indent . '                    <i class="fas fa-level-up-alt"></i>
';
        $buffer .= $indent . '                  </li>
';
        $buffer .= $indent . '                </ul>
';
        $buffer .= $indent . '                <div class="line-green"></div>
';
        $buffer .= $indent . '                <div class="popular__course">
';
        $buffer .= $indent . '                  <div class="popular__course__heading">Khóa học phổ biến</div>
';
        $buffer .= $indent . '                  <div class="popular__course__container">
';
        $buffer .= $indent . '                    <div class="popular__course__item">
';
        $buffer .= $indent . '                      <img
';
        $buffer .= $indent . '                        src="https://bizflyportal.mediacdn.vn/thumb_wm/1000,100/bizflyportal/images/moo16323762193383.jpg"
';
        $buffer .= $indent . '                        alt=""
';
        $buffer .= $indent . '                      />
';
        $buffer .= $indent . '                      <div class="popular__item__content">
';
        $buffer .= $indent . '                        <h3>SỔ TAY QUẢN LÝ CHUNG</h3>
';
        $buffer .= $indent . '                        <p>Free</p>
';
        $buffer .= $indent . '                        <h6>By Colt Anand</h6>
';
        $buffer .= $indent . '                      </div>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    <div class="popular__course__item">
';
        $buffer .= $indent . '                      <img
';
        $buffer .= $indent . '                        src="https://bizflyportal.mediacdn.vn/thumb_wm/1000,100/bizflyportal/images/moo16323762193383.jpg"
';
        $buffer .= $indent . '                        alt=""
';
        $buffer .= $indent . '                      />
';
        $buffer .= $indent . '                      <div class="popular__item__content">
';
        $buffer .= $indent . '                        <h3>KỸ NĂNG GIAO TIẾP</h3>
';
        $buffer .= $indent . '                        <p>Free</p>
';
        $buffer .= $indent . '                        <h6>By Colt Anand</h6>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                      </div>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    <div class="popular__course__item">
';
        $buffer .= $indent . '                      <img
';
        $buffer .= $indent . '                        src="https://bizflyportal.mediacdn.vn/thumb_wm/1000,100/bizflyportal/images/moo16323762193383.jpg"
';
        $buffer .= $indent . '                        alt=""
';
        $buffer .= $indent . '                      />
';
        $buffer .= $indent . '                      <div class="popular__item__content">
';
        $buffer .= $indent . '                        <h3>KỸ NĂNG SƠ CẤP CỨU</h3>
';
        $buffer .= $indent . '                        <p>Free</p>
';
        $buffer .= $indent . '                        <h6>By Colt Anand</h6>
';
        $value = $context->find('listcourse');
        $buffer .= $this->sectionF8e8e90ac9b76d50fb2963f35b2aea87($context, $indent, $value);
        $buffer .= $indent . '                      </div>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    <div class="popular__course__item">
';
        $buffer .= $indent . '                      <img
';
        $buffer .= $indent . '                        src="https://bizflyportal.mediacdn.vn/thumb_wm/1000,100/bizflyportal/images/moo16323762193383.jpg"
';
        $buffer .= $indent . '                        alt=""
';
        $buffer .= $indent . '                      />
';
        $buffer .= $indent . '                      <div class="popular__item__content">
';
        $buffer .= $indent . '                        <h3>PHÒNG CHÁY CHỮA CHÁY</h3>
';
        $buffer .= $indent . '                        <p>Free</p>
';
        $buffer .= $indent . '                        <h6>By Colt Anand</h6>
';
        $buffer .= $indent . '                      </div>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                  </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '              </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '          </div>
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_moove/footer')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->findDot('output.standard_after_main_region_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<script>
';
        $buffer .= $indent . '    var tabLinks = document.querySelectorAll(".tablinks");
';
        $buffer .= $indent . '    var tabContent = document.querySelectorAll(".tabcontent1");
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    tabLinks.forEach(function (el) {
';
        $buffer .= $indent . '      el.addEventListener("click", openTabs);
';
        $buffer .= $indent . '    });
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    function openTabs(el) {
';
        $buffer .= $indent . '      var btn = el.currentTarget;
';
        $buffer .= $indent . '      var tab = btn.dataset.tab;
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '      tabContent.forEach(function (el) {
';
        $buffer .= $indent . '        el.classList.remove("active");
';
        $buffer .= $indent . '      });
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '      tabLinks.forEach(function (el) {
';
        $buffer .= $indent . '        el.classList.remove("active");
';
        $buffer .= $indent . '      });
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '      document.querySelector("#" + tab).classList.add("active");
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '      btn.classList.add("active");
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '  </script>
';
        $buffer .= $indent . '</body>
';
        $buffer .= $indent . '</html>
';
        $value = $context->find('js');
        $buffer .= $this->section8397d600017f65f298d8425ee0497b7d($context, $indent, $value);

        return $buffer;
    }

    private function section14c724f5a6859d4cc56d9befdffaeac5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'show';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'show';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD8c059d8e564034fcd5a4fcfed7ed8eb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'closecourseindex, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'closecourseindex, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2ea462af77924166b6a954286652c7ce(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{< theme_boost/drawer }}
            {{$id}}theme_boost-drawers-courseindex{{/id}}
            {{$drawerclasses}}drawer drawer-left {{#courseindexopen}}show{{/courseindexopen}}{{/drawerclasses}}
            {{$drawercontent}}
                {{{courseindex}}}
            {{/drawercontent}}
            {{$drawerpreferencename}}drawer-open-index{{/drawerpreferencename}}
            {{$drawerstate}}show-drawer-left{{/drawerstate}}
            {{$tooltipplacement}}right{{/tooltipplacement}}
            {{$closebuttontext}}{{#str}}closecourseindex, core{{/str}}{{/closebuttontext}}
        {{/ theme_boost/drawer}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        ';
                if ($parent = $this->mustache->loadPartial('theme_boost/drawer')) {
                    $context->pushBlockContext(array(
                        'id' => array($this, 'blockEfc32b531594d5d62ec9c68e35a53dc3'),
                        'drawerclasses' => array($this, 'block0dcbcdb48783bd0043cc25a3ecb99947'),
                        'drawercontent' => array($this, 'block59db78b85db7c3f36bff517a3643ec5b'),
                        'drawerpreferencename' => array($this, 'block24fc4cc7410bc884a3b9fba5f26dc7b9'),
                        'drawerstate' => array($this, 'blockBd5099c9b82bf8a4037bbd56bb374a89'),
                        'tooltipplacement' => array($this, 'block2a81b037a416792e91b78e41049f49f9'),
                        'closebuttontext' => array($this, 'block9ac4e5859f44816b862545bc2c6e6a46'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1cb47d3ed9b97c6d6d496d2358bec253(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' show';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' show';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC14df02445cdd505a0208e8a56a5f32e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'blocks';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'blocks';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1bd0cc4642e36d67e46c9dd550f1fa06(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '1';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '1';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section31618380a8d2d407a8b2acf35dd449a4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'closeblockdrawer, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'closeblockdrawer, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA04d2732b2e6f4f4127a4f6ff32c56c4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{< theme_boost/drawer }}
            {{$id}}theme_boost-drawers-blocks{{/id}}
            {{$drawerclasses}}drawer drawer-right{{#blockdraweropen}} show{{/blockdraweropen}}{{/drawerclasses}}
            {{$drawercontent}}
                <section class="d-print-none" aria-label="{{#str}}blocks{{/str}}">
                    {{{ addblockbutton }}}
                    {{{ sidepreblocks }}}
                </section>
            {{/drawercontent}}
            {{$drawerpreferencename}}drawer-open-block{{/drawerpreferencename}}
            {{$forceopen}}{{#forceblockdraweropen}}1{{/forceblockdraweropen}}{{/forceopen}}
            {{$drawerstate}}show-drawer-right{{/drawerstate}}
            {{$tooltipplacement}}left{{/tooltipplacement}}
            {{$drawercloseonresize}}1{{/drawercloseonresize}}
            {{$closebuttontext}}{{#str}}closeblockdrawer, core{{/str}}{{/closebuttontext}}
        {{/ theme_boost/drawer}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '        ';
                if ($parent = $this->mustache->loadPartial('theme_boost/drawer')) {
                    $context->pushBlockContext(array(
                        'id' => array($this, 'block4ca482bf2f4c0292197ede951a52b02e'),
                        'drawerclasses' => array($this, 'block874d06fc7c30c807dc0ee7226cad4ec8'),
                        'drawercontent' => array($this, 'block19f7f658198871817f130ba3ab7e9373'),
                        'drawerpreferencename' => array($this, 'block59146569a56c3d2642fa2e8224817be0'),
                        'forceopen' => array($this, 'block13847ba3219919ecdb2378620735177c'),
                        'drawerstate' => array($this, 'block0ea572ae0e89f9c5cc1dc5d7238a50d5'),
                        'tooltipplacement' => array($this, 'blockC945de95615645c65d6b2f192042e6ea'),
                        'drawercloseonresize' => array($this, 'blockE052079a625ca42b568ba24af19cc7eb'),
                        'closebuttontext' => array($this, 'blockC879444321d250421c3438099ae68173'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6b40e2748488de16028fd4032111cc9b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'show-drawer-left';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'show-drawer-left';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section05ab28b93094b30436e1224de5468efa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'show-drawer-right';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'show-drawer-right';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAfaaa3dab86fd46a075d917e3ce891f0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'opendrawerindex, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'opendrawerindex, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3feaf801d4aa0a811fe41c3427e53335(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' t/index_drawer, moodle ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' t/index_drawer, moodle ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA3d831ef41333122d954f460904cec22(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <div class="drawer-toggler drawer-left-toggle open-nav d-print-none">
                                        <button
                                            class="btn icon-no-margin"
                                            data-toggler="drawers"
                                            data-action="toggle"
                                            data-target="theme_boost-drawers-courseindex"
                                            data-toggle="tooltip"
                                            data-placement="right"
                                            title="{{#str}}opendrawerindex, core{{/str}}"
                                        >
                                            <span class="sr-only">{{#str}}opendrawerindex, core{{/str}}</span>
                                            {{#pix}} t/index_drawer, moodle {{/pix}}
                                        </button>
                                    </div>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <div class="drawer-toggler drawer-left-toggle open-nav d-print-none">
';
                $buffer .= $indent . '                                        <button
';
                $buffer .= $indent . '                                            class="btn icon-no-margin"
';
                $buffer .= $indent . '                                            data-toggler="drawers"
';
                $buffer .= $indent . '                                            data-action="toggle"
';
                $buffer .= $indent . '                                            data-target="theme_boost-drawers-courseindex"
';
                $buffer .= $indent . '                                            data-toggle="tooltip"
';
                $buffer .= $indent . '                                            data-placement="right"
';
                $buffer .= $indent . '                                            title="';
                $value = $context->find('str');
                $buffer .= $this->sectionAfaaa3dab86fd46a075d917e3ce891f0($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                        >
';
                $buffer .= $indent . '                                            <span class="sr-only">';
                $value = $context->find('str');
                $buffer .= $this->sectionAfaaa3dab86fd46a075d917e3ce891f0($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                            ';
                $value = $context->find('pix');
                $buffer .= $this->section3feaf801d4aa0a811fe41c3427e53335($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                        </button>
';
                $buffer .= $indent . '                                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section245ba37b5a58f162a63e0d10700eb739(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'opendrawerblocks, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'opendrawerblocks, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0bf870995ed49a0bb4a766ed18e0f142(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/blocks_drawer, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 't/blocks_drawer, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD277bad9387573c58f79f77fc705e8dd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/blocks_drawer_rtl, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 't/blocks_drawer_rtl, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9d80d34f8fdc1b82e9d1327d162175c1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <div class="drawer-toggler drawer-right-toggle ml-auto d-print-none">
                                        <button
                                            class="btn icon-no-margin"
                                            data-toggler="drawers"
                                            data-action="toggle"
                                            data-target="theme_boost-drawers-blocks"
                                            data-toggle="tooltip"
                                            data-placement="right"
                                            title="{{#str}}opendrawerblocks, core{{/str}}"
                                        >
                                            <span class="sr-only">{{#str}}opendrawerblocks, core{{/str}}</span>
                                            <span class="dir-rtl-hide">{{#pix}}t/blocks_drawer, core{{/pix}}</span>
                                            <span class="dir-ltr-hide">{{#pix}}t/blocks_drawer_rtl, core{{/pix}}</span>
                                        </button>
                                    </div>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <div class="drawer-toggler drawer-right-toggle ml-auto d-print-none">
';
                $buffer .= $indent . '                                        <button
';
                $buffer .= $indent . '                                            class="btn icon-no-margin"
';
                $buffer .= $indent . '                                            data-toggler="drawers"
';
                $buffer .= $indent . '                                            data-action="toggle"
';
                $buffer .= $indent . '                                            data-target="theme_boost-drawers-blocks"
';
                $buffer .= $indent . '                                            data-toggle="tooltip"
';
                $buffer .= $indent . '                                            data-placement="right"
';
                $buffer .= $indent . '                                            title="';
                $value = $context->find('str');
                $buffer .= $this->section245ba37b5a58f162a63e0d10700eb739($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                        >
';
                $buffer .= $indent . '                                            <span class="sr-only">';
                $value = $context->find('str');
                $buffer .= $this->section245ba37b5a58f162a63e0d10700eb739($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                            <span class="dir-rtl-hide">';
                $value = $context->find('pix');
                $buffer .= $this->section0bf870995ed49a0bb4a766ed18e0f142($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                            <span class="dir-ltr-hide">';
                $value = $context->find('pix');
                $buffer .= $this->sectionD277bad9387573c58f79f77fc705e8dd($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                        </button>
';
                $buffer .= $indent . '                                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF7edf51d353fc9b2ab7c214d2c129a4d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <div id="region-main-settings-menu" class="d-print-none">
                                        <div> {{{ regionmainsettingsmenu }}} </div>
                                    </div>
                                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <div id="region-main-settings-menu" class="d-print-none">
';
                $buffer .= $indent . '                                        <div> ';
                $value = $this->resolveValue($context->find('regionmainsettingsmenu'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' </div>
';
                $buffer .= $indent . '                                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6b403a6a78537640b9e04a931aeb6463(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'content';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'content';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section67f45638f293ea5451c088ad3899507a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            <div class="region_main_settings_menu_proxy"></div>
                                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                            <div class="region_main_settings_menu_proxy"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF19b31eb4082ad73416c75eac9c1ecd2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            {{> core/activity_header }}
                                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/activity_header')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                                            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9b44bc6cc4051c600f1ecae3f751ac2c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            <div class="container-fluid tertiary-navigation">
                                                <div class="navitem">
                                                    {{> core/url_select}}
                                                </div>
                                            </div>
                                            
                                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                            <div class="container-fluid tertiary-navigation">
';
                $buffer .= $indent . '                                                <div class="navitem">
';
                if ($partial = $this->mustache->loadPartial('core/url_select')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                                                    ');
                }
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                            
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF8e8e90ac9b76d50fb2963f35b2aea87(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                  <div>{{stdClass.fullname}}</div>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                  <div>';
                $value = $this->resolveValue($context->findDot('stdClass.fullname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8397d600017f65f298d8425ee0497b7d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
M.util.js_pending(\'theme_boost/loader\');
require([\'theme_boost/loader\', \'theme_boost/drawer\'], function(Loader, Drawer) {
    Drawer.init();
    M.util.js_complete(\'theme_boost/loader\');
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'M.util.js_pending(\'theme_boost/loader\');
';
                $buffer .= $indent . 'require([\'theme_boost/loader\', \'theme_boost/drawer\'], function(Loader, Drawer) {
';
                $buffer .= $indent . '    Drawer.init();
';
                $buffer .= $indent . '    M.util.js_complete(\'theme_boost/loader\');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function blockEfc32b531594d5d62ec9c68e35a53dc3($context)
    {
        $indent = $buffer = '';
        $buffer .= 'theme_boost-drawers-courseindex';
    
        return $buffer;
    }

    public function block0dcbcdb48783bd0043cc25a3ecb99947($context)
    {
        $indent = $buffer = '';
        $buffer .= 'drawer drawer-left ';
        $value = $context->find('courseindexopen');
        $buffer .= $this->section14c724f5a6859d4cc56d9befdffaeac5($context, $indent, $value);
    
        return $buffer;
    }

    public function block59db78b85db7c3f36bff517a3643ec5b($context)
    {
        $indent = $buffer = '';
        $buffer .= '                ';
        $value = $this->resolveValue($context->find('courseindex'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
    
        return $buffer;
    }

    public function block24fc4cc7410bc884a3b9fba5f26dc7b9($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . 'drawer-open-index';
    
        return $buffer;
    }

    public function blockBd5099c9b82bf8a4037bbd56bb374a89($context)
    {
        $indent = $buffer = '';
        $buffer .= 'show-drawer-left';
    
        return $buffer;
    }

    public function block2a81b037a416792e91b78e41049f49f9($context)
    {
        $indent = $buffer = '';
        $buffer .= 'right';
    
        return $buffer;
    }

    public function block9ac4e5859f44816b862545bc2c6e6a46($context)
    {
        $indent = $buffer = '';
        $value = $context->find('str');
        $buffer .= $this->sectionD8c059d8e564034fcd5a4fcfed7ed8eb($context, $indent, $value);
    
        return $buffer;
    }

    public function block4ca482bf2f4c0292197ede951a52b02e($context)
    {
        $indent = $buffer = '';
        $buffer .= 'theme_boost-drawers-blocks';
    
        return $buffer;
    }

    public function block874d06fc7c30c807dc0ee7226cad4ec8($context)
    {
        $indent = $buffer = '';
        $buffer .= 'drawer drawer-right';
        $value = $context->find('blockdraweropen');
        $buffer .= $this->section1cb47d3ed9b97c6d6d496d2358bec253($context, $indent, $value);
    
        return $buffer;
    }

    public function block19f7f658198871817f130ba3ab7e9373($context)
    {
        $indent = $buffer = '';
        $buffer .= '                <section class="d-print-none" aria-label="';
        $value = $context->find('str');
        $buffer .= $this->sectionC14df02445cdd505a0208e8a56a5f32e($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->find('addblockbutton'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->find('sidepreblocks'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                </section>
';
    
        return $buffer;
    }

    public function block59146569a56c3d2642fa2e8224817be0($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . 'drawer-open-block';
    
        return $buffer;
    }

    public function block13847ba3219919ecdb2378620735177c($context)
    {
        $indent = $buffer = '';
        $value = $context->find('forceblockdraweropen');
        $buffer .= $this->section1bd0cc4642e36d67e46c9dd550f1fa06($context, $indent, $value);
    
        return $buffer;
    }

    public function block0ea572ae0e89f9c5cc1dc5d7238a50d5($context)
    {
        $indent = $buffer = '';
        $buffer .= 'show-drawer-right';
    
        return $buffer;
    }

    public function blockC945de95615645c65d6b2f192042e6ea($context)
    {
        $indent = $buffer = '';
        $buffer .= 'left';
    
        return $buffer;
    }

    public function blockE052079a625ca42b568ba24af19cc7eb($context)
    {
        $indent = $buffer = '';
        $buffer .= '1';
    
        return $buffer;
    }

    public function blockC879444321d250421c3438099ae68173($context)
    {
        $indent = $buffer = '';
        $value = $context->find('str');
        $buffer .= $this->section31618380a8d2d407a8b2acf35dd449a4($context, $indent, $value);
    
        return $buffer;
    }
}
