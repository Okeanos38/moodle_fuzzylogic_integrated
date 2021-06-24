<?php

class __Mustache_b9a72d3f86a043dc55d68a8180113ff0 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="nav-drawer" data-region="drawer" class="d-print-none moodle-has-zindex ';
        // 'navdraweropen' inverted section
        $value = $context->find('navdraweropen');
        if (empty($value)) {
            
            $buffer .= 'closed';
        }
        $buffer .= '" aria-hidden="';
        // 'navdraweropen' section
        $value = $context->find('navdraweropen');
        $buffer .= $this->section3d743337d1ee557b470226701b73da47($context, $indent, $value);
        // 'navdraweropen' inverted section
        $value = $context->find('navdraweropen');
        if (empty($value)) {
            
            $buffer .= 'true';
        }
        $buffer .= '" tabindex="-1">
';
        $buffer .= $indent . '  <li style="list-style:none !important;">
';
        $buffer .= $indent . '                      <a class="list-group-item list-group-item-action  root_node " href="https://tezmoodle.tk/yenisayfa/" data-key="sitesettings" data-isexpandable="0" data-indent="0" data-showdivider="1" data-type="71" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0">
';
        $buffer .= $indent . '                          <div class="ml-0">
';
        $buffer .= $indent . '                              <div class="media">
';
        $buffer .= $indent . '                                      <span class="media-left">
';
        $buffer .= $indent . '                                          <i class="icon fa fa-bars fa-fw" aria-hidden="true"></i>
';
        $buffer .= $indent . '                                      </span>
';
        $buffer .= $indent . '                                  <span class="media-body ">Yeni Sayfa</span>
';
        $buffer .= $indent . '                              </div>
';
        $buffer .= $indent . '                          </div>
';
        $buffer .= $indent . '                      </a>
';
        $buffer .= $indent . '                  </li>
';
        if ($partial = $this->mustache->loadPartial('theme_boost/flat_navigation')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section3d743337d1ee557b470226701b73da47(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'false';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'false';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
