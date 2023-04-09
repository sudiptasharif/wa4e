<?php
include_once 'const.php';

function tagSelfClose(string $aTag) {
    return "<$aTag/>";
}

function tag(string $aTag, string $aValue, array $properties = []) {
    if (empty($properties)) {
        return "<$aTag>$aValue</$aTag>";
    } else {
        return "<$aTag " . buildProperties($properties) . ">$aValue</$aTag>";    
    }
}

function buildProperties(array $properties) {
    $result = "";
    foreach($properties as $key => $value) {
        $result .= $key . "=\"" . $value . "\" ";
    }
    return $result;
}

function buildList(array $listItemValues) {
    $result = "";
    foreach($listItemValues as $listItem) {
        $result .= tag(li, $listItem);
    }
    return $result;
}

function br() {
    return tagSelfClose(br);
}

function l(string $aMsg) {
    echo "$aMsg" . br();
}

function pre(string $aValue) {
    return tag(pre, $aValue);
}

function h1(string $aValue) {
    return tag(h1, $aValue);
}

function h2(string $aValue) {
    return tag(h2, $aValue);
}

function h3(string $aValue) {
    return tag(h3, $aValue);
}

function h4(string $aValue) {
    return tag(h4, $aValue);
}

function h5(string $aValue) {
    return tag(h5, $aValue);
}

function h6(string $aValue) {
    return tag(h6, $aValue);
}

function ol(array $listItemValues) {
    return tag(ol, buildList($listItemValues));
}

function ul(array $listItemValues) {
    return tag(ul, buildList($listItemValues));
}

function a(string $aValue, string $aHref) {
    return  tag(a, $aValue, ['href' => $aHref]);
}

function p(string $aValue) {
    return  tag(p, $aValue);
}

