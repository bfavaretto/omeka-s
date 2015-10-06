<?php
namespace Omeka\Media\FileRenderer;

use Omeka\Api\Representation\MediaRepresentation;
use Zend\ServiceManager\ServiceLocatorAwareTrait;
use Zend\View\Renderer\PhpRenderer;

class VideoRenderer implements RendererInterface
{
    use ServiceLocatorAwareTrait;

    public function render(PhpRenderer $view, MediaRepresentation $media,
        array $options = []
    ){
        return sprintf(
            '<video src="%s" controls>%s</audio>',
            $view->escapeHtml($media->originalUrl()),
            $view->hyperlink($media->filename(), $media->originalUrl())
        );
    }
}
