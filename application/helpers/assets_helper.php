<?php

function js( $file = FALSE )
{
	if( $file )
	{
		return base_url( '/assets/js/' . $file . '.js' );
	}
}

function css( $file = FALSE )
{
	if( $file )
	{
		return base_url( '/assets/css/' . $file . '.css' );
	}
}

function img( $file = FALSE )
{
	if( $file )
	{
		return base_url( '/assets/img/' . $file );
	}
}

function thumb( $file = FALSE, $width = FALSE, $height = FALSE, $quality = FALSE )
{
	if( $file )
	{		
		$url = '';
		if( stripos($file, 'http://') !== FALSE )
		{
			$url = 'src='.$file;
		}
		else
		{
			$url = 'src='.base_url($file);
		}
		if( $width ) $url .= '&w='.$width;
		if( $height ) $url .= '&h='.$height;
		if( $quality ) $url .= '&q='.$quality;
		
		return base_url('thumb.php?'.$url);
	}
}

?>