<?php namespace Codenamegary\L4layouts;

class Asset {
    
    protected $type;
    protected $url;
    protected $render = array(
        'css'   => '<link href="%s" rel="stylesheet" type="text/css">',
        'js'    => '<script type="text/javascript" src="%s"></script>',
    );

    public function __construct( $url, $type = 'css' )
    {
        $this->url = $url;
        $this->type = $type;
    }
    
    public function render()
    {
        return sprintf( $this->render[ $this->type ], $this->url ) . "\r\n";
    }
    
}
