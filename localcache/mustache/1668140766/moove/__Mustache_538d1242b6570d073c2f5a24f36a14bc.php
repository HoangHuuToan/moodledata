<?php

class __Mustache_538d1242b6570d073c2f5a24f36a14bc extends Mustache_Template
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
        $buffer .= $indent . '    <div id="page" data-region="mainpage" data-usertour="scroller" class="drawers drag-container bg-white">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="hero-slide">
';
        $buffer .= $indent . '            <div class="hero-slide-content">
';
        $buffer .= $indent . '                <h2>Start Investing in You</h2>
';
        $buffer .= $indent . '                <p>With over 1200 courses in 18 subjects, you\'re guaranteed to find something that\'s right for you.</p>
';
        $buffer .= $indent . '                <div><button>Get started</button></div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div><img src="https://img.freepik.com/free-vector/happy-women-learning-language-online-isolated-flat-vector-illustration-cartoon-female-characters-taking-individual-lessons-through-messenger-education-digital-technology-concept_74855-10088.jpg?size=626&ext=jpg&ga=GA1.2.1588815019.1665843419&semt=sph" alt="hero slide image"/></div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="block">
';
        $buffer .= $indent . '            <div class="block__item">
';
        $buffer .= $indent . '                <div class="block__item__logo">
';
        $buffer .= $indent . '                    <i class="fab fa-facebook-square"></i>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <h4>Worldwide Recognize</h4>
';
        $buffer .= $indent . '                <p>
';
        $buffer .= $indent . '                Our online course certificates can be used around the world and also
';
        $buffer .= $indent . '                in most popular universities and companies.
';
        $buffer .= $indent . '                </p>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="block__item">
';
        $buffer .= $indent . '                <div class="block__item__logo">
';
        $buffer .= $indent . '                <i class="fab fa-facebook-square"></i>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <h4>Worldwide Recognize</h4>
';
        $buffer .= $indent . '                <p>
';
        $buffer .= $indent . '                Our online course certificates can be used around the world and also
';
        $buffer .= $indent . '                in most popular universities and companies.
';
        $buffer .= $indent . '                </p>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="block__item">
';
        $buffer .= $indent . '                <div class="block__item__logo"><i class="fab fa-facebook-square"></i></div>
';
        $buffer .= $indent . '                <h4>Worldwide Recognize</h4>
';
        $buffer .= $indent . '                <p>
';
        $buffer .= $indent . '                Our online course certificates can be used around the world and also
';
        $buffer .= $indent . '                in most popular universities and companies.
';
        $buffer .= $indent . '                </p>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="banner-1">
';
        $buffer .= $indent . '            <div class="container">
';
        $buffer .= $indent . '                <h2>Limitless learning, more possibilities</h2>
';
        $buffer .= $indent . '                    <p>
';
        $buffer .= $indent . '                        Online courses open the opportunity for learning to almost anyone,
';
        $buffer .= $indent . '                        regardless of their scheduling commitments.
';
        $buffer .= $indent . '                    </p>
';
        $buffer .= $indent . '                    <button type="button"><a>Read more</a></button>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $value = $context->find('displaymarketingbox');
        $buffer .= $this->section100ed463c4b2cc1179ff15a15b8f510f($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('numbersfrontpage');
        $buffer .= $this->section7dfb11ba6f30b78284aabeb64ca43d53($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div id="topofscroll">
';
        $buffer .= $indent . '            <div id="page-content" class="d-print-block main-inner">
';
        $buffer .= $indent . '                <div id="region-main-box">
';
        $buffer .= $indent . '                    <section id="region-main" aria-label="';
        $value = $context->find('str');
        $buffer .= $this->section6b403a6a78537640b9e04a931aeb6463($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '                        ';
        $value = $this->resolveValue($context->findDot('output.course_content_header'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                        ';
        $value = $this->resolveValue($context->findDot('output.main_content'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                        ';
        $value = $this->resolveValue($context->findDot('output.course_content_footer'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </section>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="calculator">
';
        $buffer .= $indent . '            <div class="calculator__heading">
';
        $buffer .= $indent . '                <h1>We are Proud</h1>
';
        $buffer .= $indent . '                <p>
';
        $buffer .= $indent . '                Certificate courses are instructed by highly educated and qualified
';
        $buffer .= $indent . '                instructors who hold doctoral and master’s level degrees.
';
        $buffer .= $indent . '                </p>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="calculator__container">
';
        $buffer .= $indent . '                <div class="calculator__container__heading">
';
        $buffer .= $indent . '                <h3>2000</h3>
';
        $buffer .= $indent . '                <div>STUDENTS</div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="calculator__container__line"></div>
';
        $buffer .= $indent . '                <div class="calculator__container__heading">
';
        $buffer .= $indent . '                <h3>950</h3>
';
        $buffer .= $indent . '                <div>COURSES</div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="calculator__container__line"></div>
';
        $buffer .= $indent . '                <div class="calculator__container__heading">
';
        $buffer .= $indent . '                <h3>1600</h3>
';
        $buffer .= $indent . '                <div>HOURS VIDEO</div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="calculator__container__line"></div>
';
        $buffer .= $indent . '                <div class="calculator__container__heading">
';
        $buffer .= $indent . '                <h3>150</h3>
';
        $buffer .= $indent . '                <div>COUNTRIES REACHED</div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div>
';
        $buffer .= $indent . '                <img
';
        $buffer .= $indent . '                src="https://masterstudy.stylemixthemes.com/white-lms/wp-content/uploads/sites/7/2018/07/we_proud.png?id=287"
';
        $buffer .= $indent . '                alt=""
';
        $buffer .= $indent . '                />
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="calculator__banner">
';
        $buffer .= $indent . '                <div class="calculator__banner__container">
';
        $buffer .= $indent . '                <div>
';
        $buffer .= $indent . '                    <h4 class="text-white text-xl">Subscribe our newsletter</h4>
';
        $buffer .= $indent . '                    <p class="text-white">
';
        $buffer .= $indent . '                    There are many variations of passages of Lorem Ipsum available,
';
        $buffer .= $indent . '                    but the majority have suffered alteration in some form, by
';
        $buffer .= $indent . '                    injected humour, or randomised words
';
        $buffer .= $indent . '                    </p>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="register">
';
        $buffer .= $indent . '            <div class="register-left">
';
        $buffer .= $indent . '                <div class="image-register"><img src="https://masterstudy.stylemixthemes.com/white-lms/wp-content/uploads/sites/7/2018/11/image_box_1-221x231.png" alt="hình ảnh"/></div>
';
        $buffer .= $indent . '                <div class="content">
';
        $buffer .= $indent . '                    <h2>Become an Instructor</h2>
';
        $buffer .= $indent . '                    <p>Teach what you love. Masterstudy gives you the tools to create a course.</p>
';
        $buffer .= $indent . '                    <div><button>Start learning</button></div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="register-right">
';
        $buffer .= $indent . '                <div class="image-register"><img src="https://masterstudy.stylemixthemes.com/white-lms/wp-content/uploads/sites/7/2018/11/image_box_2-234x231.png" alt="hình ảnh"/></div>
';
        $buffer .= $indent . '                <div class="content">
';
        $buffer .= $indent . '                    <h2>Become an Instructor</h2>
';
        $buffer .= $indent . '                    <p>Teach what you love. Masterstudy gives you the tools to create a course.</p>
';
        $buffer .= $indent . '                    <div><button>Start learning</button></div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="bannner-footer">
';
        $buffer .= $indent . '            <div class="content-banner-footer">
';
        $buffer .= $indent . '                <div>
';
        $buffer .= $indent . '                    <h2>Investing for Your Future</h2>   
';
        $buffer .= $indent . '                    <p>It is no exaggeration to say this MasterStudy experience was transformative–both professionally and personally. This workshop will long remain a high point of my life. Thanks again…. I am feeling energized and eager to start teaching my class next week. I can’t wait to use all of my new teaching tools. I will absolutely recommend this workshop to other educators!</p>         
';
        $buffer .= $indent . '                    <div class="author">
';
        $buffer .= $indent . '                        <strong>Xatashi Froust</strong><br/>
';
        $buffer .= $indent . '                        SEO, Froust Inc
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $value = $context->find('faqenabled');
        $buffer .= $this->sectionF2004cc1991e6b8c4a2ff413c366d003($context, $indent, $value);
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
        $buffer .= $indent . '</body>
';
        $buffer .= $indent . '</html>
';
        $value = $context->find('js');
        $buffer .= $this->section8397d600017f65f298d8425ee0497b7d($context, $indent, $value);

        return $buffer;
    }

    private function sectionA11d9cec1f6b588974d15095f6c2b557(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <div class="col-sm-6 mt-4">
                                        <div class="card card-body shadow">
                                            <div class="d-flex">
                                                <div class="icon-lg text-white rounded-circle">
                                                    <img src="{{{icon}}}">
                                                </div>
                                                <div class="col ps-3">
                                                    <h5>{{{heading}}}</h5>
                                                    <div class="box-content">{{{content}}}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <div class="col-sm-6 mt-4">
';
                $buffer .= $indent . '                                        <div class="card card-body shadow">
';
                $buffer .= $indent . '                                            <div class="d-flex">
';
                $buffer .= $indent . '                                                <div class="icon-lg text-white rounded-circle">
';
                $buffer .= $indent . '                                                    <img src="';
                $value = $this->resolveValue($context->find('icon'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                                <div class="col ps-3">
';
                $buffer .= $indent . '                                                    <h5>';
                $value = $this->resolveValue($context->find('heading'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h5>
';
                $buffer .= $indent . '                                                    <div class="box-content">';
                $value = $this->resolveValue($context->find('content'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section100ed463c4b2cc1179ff15a15b8f510f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <section id="feature">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 my-3">
                            <h3 class="h1 mt-3 mb-3">{{{marketingheading}}}</h3>
                            <div class="marketing-content">{{{marketingcontent}}}</div>
                        </div>
                        <div class="col-lg-8 ps-xl-8">
                            <div class="row">
                                {{#marketingboxes}}
                                    <div class="col-sm-6 mt-4">
                                        <div class="card card-body shadow">
                                            <div class="d-flex">
                                                <div class="icon-lg text-white rounded-circle">
                                                    <img src="{{{icon}}}">
                                                </div>
                                                <div class="col ps-3">
                                                    <h5>{{{heading}}}</h5>
                                                    <div class="box-content">{{{content}}}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                {{/marketingboxes}}
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <section id="feature">
';
                $buffer .= $indent . '                <div class="container">
';
                $buffer .= $indent . '                    <div class="row">
';
                $buffer .= $indent . '                        <div class="col-lg-4 my-3">
';
                $buffer .= $indent . '                            <h3 class="h1 mt-3 mb-3">';
                $value = $this->resolveValue($context->find('marketingheading'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h3>
';
                $buffer .= $indent . '                            <div class="marketing-content">';
                $value = $this->resolveValue($context->find('marketingcontent'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="col-lg-8 ps-xl-8">
';
                $buffer .= $indent . '                            <div class="row">
';
                $value = $context->find('marketingboxes');
                $buffer .= $this->sectionA11d9cec1f6b588974d15095f6c2b557($context, $indent, $value);
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </section>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEebda8ccf20355c1f145216979119901(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'numbersusers, theme_moove';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'numbersusers, theme_moove';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFcdb637207015834c8999dd80fdc9806(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'numberscourses, theme_moove';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'numberscourses, theme_moove';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7dfb11ba6f30b78284aabeb64ca43d53(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <section id="numbers">
                <div class="moove-container-fluid">
                    <div class="row customer-area-l1 justify-content-center align-items-center ">
                        <div class="col-xl-5 col-lg-5 col-md-10">
                            <div class="sectionheading">
                                {{{numberscontent}}}
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7 col-md-10 offset-xl-1">
                            <div class="row user-rating-box-area">
                                <div class="col-sm-6 col-xs-8">
                                    <div class="h-100 rate-box bg-primary">
                                        <h3>
                                            {{{numbersusers}}}
                                        </h3>
                                        <p>{{#str}}numbersusers, theme_moove{{/str}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-8">
                                    <div class="h-100 rate-box rate-box-2 bg-cloudburst">
                                        <h3>
                                            {{{numberscourses}}}
                                        </h3>
                                        <p>{{#str}}numberscourses, theme_moove{{/str}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <section id="numbers">
';
                $buffer .= $indent . '                <div class="moove-container-fluid">
';
                $buffer .= $indent . '                    <div class="row customer-area-l1 justify-content-center align-items-center ">
';
                $buffer .= $indent . '                        <div class="col-xl-5 col-lg-5 col-md-10">
';
                $buffer .= $indent . '                            <div class="sectionheading">
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('numberscontent'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="col-xl-6 col-lg-7 col-md-10 offset-xl-1">
';
                $buffer .= $indent . '                            <div class="row user-rating-box-area">
';
                $buffer .= $indent . '                                <div class="col-sm-6 col-xs-8">
';
                $buffer .= $indent . '                                    <div class="h-100 rate-box bg-primary">
';
                $buffer .= $indent . '                                        <h3>
';
                $buffer .= $indent . '                                            ';
                $value = $this->resolveValue($context->find('numbersusers'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                        </h3>
';
                $buffer .= $indent . '                                        <p>';
                $value = $context->find('str');
                $buffer .= $this->sectionEebda8ccf20355c1f145216979119901($context, $indent, $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                                <div class="col-sm-6 col-xs-8">
';
                $buffer .= $indent . '                                    <div class="h-100 rate-box rate-box-2 bg-cloudburst">
';
                $buffer .= $indent . '                                        <h3>
';
                $buffer .= $indent . '                                            ';
                $value = $this->resolveValue($context->find('numberscourses'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                        </h3>
';
                $buffer .= $indent . '                                        <p>';
                $value = $context->find('str');
                $buffer .= $this->sectionFcdb637207015834c8999dd80fdc9806($context, $indent, $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </section>
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

    private function section4751be753bef83b9cd391960a73b2d18(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'faq, theme_moove';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'faq, theme_moove';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC3cc51e72be08cb850dac9be27417639(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div class="card shadow">
                                <div class="card-header" id="heading-{{{id}}}">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse-{{{id}}}" aria-expanded="false" aria-controls="collapse-{{{id}}}">
                                            {{{question}}}
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapse-{{{id}}}" class="collapse" aria-labelledby="heading-{{{id}}}" data-parent="#accordionFaq">
                                    <div class="card-body">
                                        {{{answer}}}
                                    </div>
                                </div>
                            </div>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <div class="card shadow">
';
                $buffer .= $indent . '                                <div class="card-header" id="heading-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                    <h2 class="mb-0">
';
                $buffer .= $indent . '                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" aria-expanded="false" aria-controls="collapse-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                            ';
                $value = $this->resolveValue($context->find('question'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                        </button>
';
                $buffer .= $indent . '                                    </h2>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                                <div id="collapse-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="collapse" aria-labelledby="heading-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" data-parent="#accordionFaq">
';
                $buffer .= $indent . '                                    <div class="card-body">
';
                $buffer .= $indent . '                                        ';
                $value = $this->resolveValue($context->find('answer'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF2004cc1991e6b8c4a2ff413c366d003(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <section id="faq" class="scale-up scale-up-show">
                <div class="moove-container-fluid">
                    <h2>{{#str}}faq, theme_moove{{/str}}</h2>

                    <div class="accordion" id="accordionFaq">
                        {{#faq}}
                            <div class="card shadow">
                                <div class="card-header" id="heading-{{{id}}}">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse-{{{id}}}" aria-expanded="false" aria-controls="collapse-{{{id}}}">
                                            {{{question}}}
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapse-{{{id}}}" class="collapse" aria-labelledby="heading-{{{id}}}" data-parent="#accordionFaq">
                                    <div class="card-body">
                                        {{{answer}}}
                                    </div>
                                </div>
                            </div>
                        {{/faq}}
                    </div>
                </div>
            </section>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <section id="faq" class="scale-up scale-up-show">
';
                $buffer .= $indent . '                <div class="moove-container-fluid">
';
                $buffer .= $indent . '                    <h2>';
                $value = $context->find('str');
                $buffer .= $this->section4751be753bef83b9cd391960a73b2d18($context, $indent, $value);
                $buffer .= '</h2>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                    <div class="accordion" id="accordionFaq">
';
                $value = $context->find('faq');
                $buffer .= $this->sectionC3cc51e72be08cb850dac9be27417639($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </section>
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

}
