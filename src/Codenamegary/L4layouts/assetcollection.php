<?php namespace Codenamegary\L4layouts;

class AssetCollection {
    
    protected $name;
    protected $collections = array();
    protected $assets = array(
        'css'   => array(),
        'js'    => array(),
    );
    
    public function __construct( $name = '' )
    {
        $this->name = $name;
    }
    
    public function addCss( $url )
    {
        $this->assets[ 'css' ][] = new Asset( $url, 'css' );
    }

    public function addJs( $url )
    {
        $this->assets[ 'js' ][] = new Asset( $url, 'js' );
    }
    
    public function addCollection( AssetCollection $assetCollection )
    {
        $this->collections[ $assetCollection->name ] = $assetCollection;
    }

    public function render( $type = 'css' )
    {
        $output = '';
        foreach( $this->collections as $collection )
        {
            $output .= $collection->render( $type );
        }
        foreach( $this->assets[ $type ] as $asset )
        {
            $output .= $asset->render();
        }
        return $output;
    }
    
    // Returns or creates a collection with name $name
    public function collection( $name )
    {
        if( !isset( $this->collections[ $name ] ) ) $this->collections[ $name ] = new AssetCollection( $name );
        return $this->collections[ $name ];
    }
    
}
