<?php

class __Mustache_8292cd71b3e2c09656b8af0e1fa66426 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<nav class="top-nav">
';
        $buffer .= $indent . '    <div class="container-nav">
';
        $buffer .= $indent . '        <div class="top-nav-left">';
        $value = $context->find('langmenu');
        $buffer .= $this->section2a521dcf1a529f9936a3d9bc3fb7afe7($context, $indent, $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '        <div class="top-nav-right">
';
        $buffer .= $indent . '            <ul>
';
        $buffer .= $indent . '                <li class="list-menu-item"><i class="fas fa-phone"></i><a href="#">+84913835485</a></li>
';
        $buffer .= $indent . '                <li class="list-menu-item"><i class="fas fa-map-marker-alt"></i><a href="#">Sky City Towers, 88 Láng Hạ, Đống Đa, Hà Nội</a></li>
';
        $buffer .= $indent . '            </ul>
';
        $buffer .= $indent . '            <ul>
';
        $buffer .= $indent . '                <li class="list-menu-item"><a href="#"><i class="fab fa-facebook-square"></i></a></li>
';
        $buffer .= $indent . '                <li class="list-menu-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
';
        $buffer .= $indent . '                <li class="list-menu-item"><a href="#"><i class="fab fa-instagram-square"></i></a></li>
';
        $buffer .= $indent . '            </ul>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</nav>
';
        $buffer .= $indent . '<nav class="navbar navbar-light  navbar-expand " aria-label="';
        $value = $context->find('str');
        $buffer .= $this->section1880a930791c830b67e23ff34b5a4123($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <button class="navbar-toggler aabtn d-block d-md-none px-1 my-1 border-0" data-toggler="drawers" data-action="toggle" data-target="theme_moove-drawers-primary">
';
        $buffer .= $indent . '        <span class="navbar-toggler-icon"></span>
';
        $buffer .= $indent . '        <span class="sr-only">';
        $value = $context->find('str');
        $buffer .= $this->sectionB88b20c96dd523877b35fd7e4389a3fd($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '    </button>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <a href="';
        $value = $this->resolveValue($context->findDot('config.homeurl'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" class="navbar-brand d-none d-md-flex align-items-center m-0 mr-4 p-0 aabtn">
';
        $value = $context->findDot('output.should_display_logo');
        $buffer .= $this->sectionD6a9603318cb09006e95f8a3645c781a($context, $indent, $value);
        $value = $context->findDot('output.should_display_logo');
        if (empty($value)) {
            
            $buffer .= $indent . '            ';
            $value = $this->resolveValue($context->find('sitename'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
        }
        $buffer .= $indent . '    </a>
';
        $buffer .= $indent . '
';
        $value = $context->find('primarymoremenu');
        $buffer .= $this->section8b72e6381253700d9264ede40d925d72($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <ul class="navbar-nav d-none d-md-flex my-1 px-1">
';
        $buffer .= $indent . '        <!-- page_heading_menu -->
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->findDot('output.page_heading_menu'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '    </ul>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div id="usernavigation" class="navbar-nav ml-auto">
';
        $buffer .= $indent . '        <div class="navbarcallbacks">
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->findDot('output.get_navbar_callbacks_data'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $value = $context->findDot('output.search_box');
        $buffer .= $this->sectionE2562fcbd77029c1b5711289433b72fd($context, $indent, $value);
        $buffer .= $indent . '        
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->findDot('output.navbar_plugin_output'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '        <div class="d-flex align-items-stretch usermenu-container" data-region="usermenu">
';
        $value = $context->find('usermenu');
        $buffer .= $this->sectionE5695d2f8ae8540a988acfe2bf214d13($context, $indent, $value);
        $buffer .= $indent . '            
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->findDot('output.edit_switch'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</nav>
';
        $buffer .= $indent . '
';
        $value = $context->find('secondarymoremenu');
        $buffer .= $this->section1c204fa36c1da1286a2c7d01d7ddb52c($context, $indent, $value);
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_moove/primary-drawer-mobile')) {
            $buffer .= $partial->renderInternal($context);
        }

        return $buffer;
    }

    private function section2a521dcf1a529f9936a3d9bc3fb7afe7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{> theme_moove/language_menu }}
            <div class="divider border-left h-75 align-self-center mx-1"></div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '
';
                if ($partial = $this->mustache->loadPartial('theme_moove/language_menu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $buffer .= $indent . '            <div class="divider border-left h-75 align-self-center mx-1"></div>
';
                $buffer .= $indent . '        ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1880a930791c830b67e23ff34b5a4123(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'sitemenubar, admin';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'sitemenubar, admin';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB88b20c96dd523877b35fd7e4389a3fd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'sidepanel, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'sidepanel, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD6a9603318cb09006e95f8a3645c781a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <img src="{{output.get_logo}}" class="logo mr-1" alt="{{sitename}}">
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <img src="';
                $value = $this->resolveValue($context->findDot('output.get_logo'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="logo mr-1" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8b72e6381253700d9264ede40d925d72(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="primary-navigation">
            {{> core/moremenu}}
            <div class="category-course">Danh mục<i class="fas fa-angle-down"></i></div>
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="primary-navigation">
';
                if ($partial = $this->mustache->loadPartial('core/moremenu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $buffer .= $indent . '            <div class="category-course">Danh mục<i class="fas fa-angle-down"></i></div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE2562fcbd77029c1b5711289433b72fd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{{ output.search_box }}}
            <div class="divider border-left h-75 align-self-center mx-1"></div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->findDot('output.search_box'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            <div class="divider border-left h-75 align-self-center mx-1"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE5695d2f8ae8540a988acfe2bf214d13(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{> core/user_menu }}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/user_menu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1c204fa36c1da1286a2c7d01d7ddb52c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="secondary-navigation d-print-none moove">
        <div class="moove-container-fluid">
            {{> core/moremenu}}
        </div>
    </div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="secondary-navigation d-print-none moove">
';
                $buffer .= $indent . '        <div class="moove-container-fluid">
';
                if ($partial = $this->mustache->loadPartial('core/moremenu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
