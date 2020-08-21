<?php
class PluginTwitterBootstrap413v{
  public function widget_include($data){
    /**
     * Tell other plugin that Bootstrap 4 is included.
     */
    $_SESSION['plugin']['twitter']['bootstrap413v']['include'] = true;
    /**
     * 
     */
    wfPlugin::includeonce('wf/array');
    $data = new PluginWfArray($data);
    $element = array();
    $element[] = $this->getElementText("\n<!-- PluginTwitterBootstrap413v, Start -->\n");
    if($data->get('data/meta')){
      $element[] = $this->getElementMetaCharset();
      $element[] = $this->getElementMetaViewport();
    }
    if($data->get('data/css')){
      $element[] = $this->getElementCss();
      $element[] = $this->getElementCssStyleModal();
    }
    if($data->get('data/jquery')){
      $element[] = $this->getElementJsJquery();
    }
    if($data->get('data/popper')){
      $element[] = $this->getElementJsPopper();
    }
    if($data->get('data/js')){
      $element[] = $this->getElementJsBootstrap();
    }
    $element[] = $this->getElementStyleWebmaster();
    $element[] = $this->getElementText("<!-- PluginTwitterBootstrap413v, End -->\n");
    wfDocument::renderElement($element);
  }
  private function getElementText($text){
    return wfDocument::createHtmlElement('text', $text);
  }
  private function getElementMetaCharset(){
    return wfDocument::createHtmlElement('meta', null, array('charset' => 'utf-8'));
  }
  private function getElementMetaViewport(){
    return wfDocument::createHtmlElement('meta', null, array('name' => 'viewport', 'content' => "width=device-width, user-scalable=no"));
  }
  private function getElementCss(){
    return wfDocument::createHtmlElement('link', null, array('rel' => 'stylesheet', 'href' => '/plugin/twitter/bootstrap413v/css/bootstrap.min.css', 'id' => 'PluginTwitterBootstrap413v'));
  }
  private function getElementCssStyleModal(){
    return wfDocument::createHtmlElement('style', "@media (min-width: 700px) {.modal-xl { max-width: 90% !important; } }");
  }
  private function getElementJsBootstrap(){
    return wfDocument::createHtmlElement('script', null, array('src' => '/plugin/twitter/bootstrap413v/js/bootstrap.min.js'));
  }
  private function getElementJsJquery(){
    return wfDocument::createHtmlElement('script', null, array('src' => '/plugin/twitter/bootstrap413v/jquery/jquery_3.3.1.js'));
  }
  private function getElementJsPopper(){
    return wfDocument::createHtmlElement('script', null, array('src' => '/plugin/twitter/bootstrap413v/popper/1.14.3_popper.min.js'));
  }
  private function getElementStyleWebmaster(){
    return wfDocument::createHtmlElement('style', ".webmaster{}.webmaster-border{border:solid 1px red !important}.webmaster-text{color:red !important}");
  }
}
