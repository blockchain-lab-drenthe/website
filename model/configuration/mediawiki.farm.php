<?php
$dir = new DirectoryIterator( realpath( __DIR__ . '/farm' ) );
foreach ($dir as $fileinfo )
{
    if ( !$fileinfo->isDot() )
    {
        if ( require_once( $fileinfo->getPathname() ) )
        {
            return true;
        }
    }
}
exit;
