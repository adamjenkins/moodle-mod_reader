<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

// Copyright (C) 2004  Education Promoting Center, Yamaguchi University  //
//                     http://www.epc.yamaguchi-u.ac.jp                  //
// This program is free software; you can redistribute it and/or modify  //
// the Free Software Foundation; either version 2 of the License, or     //
// (at your option) any later version.                                   //
// This program is distributed in the hope that it will be useful,       //
// but WITHOUT ANY WARRANTY; without even the implied warranty of        //
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the         //
// GNU General Public License for more details:                          //
//          http://www.gnu.org/copyleft/gpl.html                         //
?>

<style media="print">body {display:none}</style>

<script type="text/javascript">
//<![CDATA[

/** Prevent direct access to this script */
defined('MOODLE_INTERNAL') || die;

var message = "<?php print_string('functiondisabled'); ?>";

/**
 * click
 *
 * @param xxx e
 * @return xxx
 * @todo Finish documenting this function
 */
function click(e) {
    if (document.all) {
        if (event.button==1) {
           return false;
        }
        if (event.button==2) {
           alert(message);
           return false;
        }
    }
    if (document.layers) {
        if (e.which > 1) {
           alert(message);
           return false;
        }
    }
}
if (document.layers) {
    document.captureEvents(Event.MOUSEDOWN);
}
document.onmousedown=click;
document.oncontextmenu=new Function("alert(message);return false")

document.write(unescape("%3C%53%43%52%49%50%54%20%4C%41%4E%47%55%41%47%45%3D%22%4A%61%76%61%53%63%72%69%70%74%22%3E%3C%21%2D%2D%0D%0A%68%70%5F%6F%6B%3D%74%72%75%65%3B%66%75%6E%63%74%69%6F%6E%20%68%70%5F%64%30%30%28%73%29%7B%69%66%28%21%68%70%5F%6F%6B%29%72%65%74%75%72%6E%3B%64%6F%63%75%6D%65%6E%74%2E%77%72%69%74%65%28%73%29%7D%2F%2F%2D%2D%3E%3C%2F%53%43%52%49%50%54%3E"));

hp_d00(unescape("%3C%53%43%52%49%50%54%20%4C%41%4E%47%55%41%47%45%3D%22%4A%61%76%61%53%63%72%69%70%74%22%3E%3C%21%2D%2D%0D%0A%66%75%6E%63%74%69%6F%6E%20%68%70%5F%6E%65%28%29%7B%72%65%74%75%72%6E%20%74%72%75%65%7D%6F%6E%65%72%72%6F%72%3D%68%70%5F%6E%65%3B%66%75%6E%63%74%69%6F%6E%20%68%70%5F%64%6E%28%61%29%7B%72%65%74%75%72%6E%20%66%61%6C%73%65%7D%3B%66%75%6E%63%74%69%6F%6E%20%68%70%5F%64%65%28%65%29%7B%72%65%74%75%72%6E%28%65%2E%74%61%72%67%65%74%2E%74%61%67%4E%61%6D%65%21%3D%6E%75%6C%6C%26%26%65%2E%74%61%72%67%65%74%2E%74%61%67%4E%61%6D%65%2E%73%65%61%72%63%68%28%27%5E%28%49%4E%50%55%54%7C%54%45%58%54%41%52%45%41%7C%42%55%54%54%4F%4E%7C%53%45%4C%45%43%54%29%24%27%29%21%3D%2D%31%29%7D%3B%66%75%6E%63%74%69%6F%6E%20%68%70%5F%6D%64%28%65%29%7B%69%66%28%65%2E%77%68%69%63%68%3D%3D%31%29%7B%77%69%6E%64%6F%77%2E%63%61%70%74%75%72%65%45%76%65%6E%74%73%28%45%76%65%6E%74%2E%4D%4F%55%53%45%4D%4F%56%45%29%3B%77%69%6E%64%6F%77%2E%6F%6E%6D%6F%75%73%65%6D%6F%76%65%3D%68%70%5F%64%6E%7D%7D%66%75%6E%63%74%69%6F%6E%20%68%70%5F%6D%75%28%65%29%7B%69%66%28%65%2E%77%68%69%63%68%3D%3D%31%29%7B%77%69%6E%64%6F%77%2E%72%65%6C%65%61%73%65%45%76%65%6E%74%73%28%45%76%65%6E%74%2E%4D%4F%55%53%45%4D%4F%56%45%29%3B%77%69%6E%64%6F%77%2E%6F%6E%6D%6F%75%73%65%6D%6F%76%65%3D%6E%75%6C%6C%7D%7D%69%66%28%6E%61%76%69%67%61%74%6F%72%2E%61%70%70%4E%61%6D%65%2E%69%6E%64%65%78%4F%66%28%27%49%6E%74%65%72%6E%65%74%20%45%78%70%6C%6F%72%65%72%27%29%3D%3D%2D%31%7C%7C%28%6E%61%76%69%67%61%74%6F%72%2E%75%73%65%72%41%67%65%6E%74%2E%69%6E%64%65%78%4F%66%28%27%4D%53%49%45%27%29%21%3D%2D%31%26%26%64%6F%63%75%6D%65%6E%74%2E%61%6C%6C%2E%6C%65%6E%67%74%68%21%3D%30%29%29%7B%69%66%28%64%6F%63%75%6D%65%6E%74%2E%61%6C%6C%29%7B%64%6F%63%75%6D%65%6E%74%2E%6F%6E%73%65%6C%65%63%74%73%74%61%72%74%3D%68%70%5F%64%6E%7D%65%6C%73%65%20%69%66%28%64%6F%63%75%6D%65%6E%74%2E%6C%61%79%65%72%73%29%7B%77%69%6E%64%6F%77%2E%63%61%70%74%75%72%65%45%76%65%6E%74%73%28%45%76%65%6E%74%2E%4D%4F%55%53%45%55%50%7C%45%76%65%6E%74%2E%4D%4F%55%53%45%44%4F%57%4E%29%3B%77%69%6E%64%6F%77%2E%6F%6E%6D%6F%75%73%65%64%6F%77%6E%3D%68%70%5F%6D%64%3B%77%69%6E%64%6F%77%2E%6F%6E%6D%6F%75%73%65%75%70%3D%68%70%5F%6D%75%7D%65%6C%73%65%20%69%66%28%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%26%26%21%64%6F%63%75%6D%65%6E%74%2E%61%6C%6C%29%7B%64%6F%63%75%6D%65%6E%74%2E%6F%6E%6D%6F%75%73%65%64%6F%77%6E%3D%68%70%5F%64%65%7D%7D%69%66%28%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%2E%73%75%62%73%74%72%69%6E%67%28%30%2C%34%29%3D%3D%22%66%69%6C%65%22%29%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%3D%22%61%62%6F%75%74%3A%62%6C%61%6E%6B%22%3B%66%75%6E%63%74%69%6F%6E%20%68%70%5F%6E%6C%73%28%29%7B%77%69%6E%64%6F%77%2E%73%74%61%74%75%73%3D%22%22%3B%73%65%74%54%69%6D%65%6F%75%74%28%22%68%70%5F%6E%6C%73%28%29%22%2C%31%30%29%7D%68%70%5F%6E%6C%73%28%29%3B%66%75%6E%63%74%69%6F%6E%20%68%70%5F%64%70%31%28%29%7B%66%6F%72%28%69%3D%30%3B%69%3C%64%6F%63%75%6D%65%6E%74%2E%61%6C%6C%2E%6C%65%6E%67%74%68%3B%69%2B%2B%29%7B%69%66%28%64%6F%63%75%6D%65%6E%74%2E%61%6C%6C%5B%69%5D%2E%73%74%79%6C%65%2E%76%69%73%69%62%69%6C%69%74%79%21%3D%22%68%69%64%64%65%6E%22%29%7B%64%6F%63%75%6D%65%6E%74%2E%61%6C%6C%5B%69%5D%2E%73%74%79%6C%65%2E%76%69%73%69%62%69%6C%69%74%79%3D%22%68%69%64%64%65%6E%22%3B%64%6F%63%75%6D%65%6E%74%2E%61%6C%6C%5B%69%5D%2E%69%64%3D%22%68%70%5F%69%64%22%7D%7D%7D%3B%66%75%6E%63%74%69%6F%6E%20%68%70%5F%64%70%32%28%29%7B%66%6F%72%28%69%3D%30%3B%69%3C%64%6F%63%75%6D%65%6E%74%2E%61%6C%6C%2E%6C%65%6E%67%74%68%3B%69%2B%2B%29%7B%69%66%28%64%6F%63%75%6D%65%6E%74%2E%61%6C%6C%5B%69%5D%2E%69%64%3D%3D%22%68%70%5F%69%64%22%29%64%6F%63%75%6D%65%6E%74%2E%61%6C%6C%5B%69%5D%2E%73%74%79%6C%65%2E%76%69%73%69%62%69%6C%69%74%79%3D%22%22%7D%7D%3B%77%69%6E%64%6F%77%2E%6F%6E%62%65%66%6F%72%65%70%72%69%6E%74%3D%68%70%5F%64%70%31%3B%77%69%6E%64%6F%77%2E%6F%6E%61%66%74%65%72%70%72%69%6E%74%3D%68%70%5F%64%70%32%3B%64%6F%63%75%6D%65%6E%74%2E%77%72%69%74%65%28%27%3C%73%74%79%6C%65%20%74%79%70%65%3D%22%74%65%78%74%2F%63%73%73%22%20%6D%65%64%69%61%3D%22%70%72%69%6E%74%22%3E%3C%21%2D%2D%62%6F%64%79%7B%64%69%73%70%6C%61%79%3A%6E%6F%6E%65%7D%2D%2D%3E%3C%2F%73%74%79%6C%65%3E%27%29%3B%66%75%6E%63%74%69%6F%6E%20%68%70%5F%64%63%28%29%7B%68%70%5F%74%61%2E%63%72%65%61%74%65%54%65%78%74%52%61%6E%67%65%28%29%2E%65%78%65%63%43%6F%6D%6D%61%6E%64%28%22%43%6F%70%79%22%29%3B%73%65%74%54%69%6D%65%6F%75%74%28%22%68%70%5F%64%63%28%29%22%2C%33%30%30%29%7D%69%66%28%6E%61%76%69%67%61%74%6F%72%2E%61%70%70%4E%61%6D%65%2E%69%6E%64%65%78%4F%66%28%27%49%6E%74%65%72%6E%65%74%20%45%78%70%6C%6F%72%65%72%27%29%3D%3D%2D%31%7C%7C%28%6E%61%76%69%67%61%74%6F%72%2E%75%73%65%72%41%67%65%6E%74%2E%69%6E%64%65%78%4F%66%28%27%4D%53%49%45%27%29%21%3D%2D%31%26%26%64%6F%63%75%6D%65%6E%74%2E%61%6C%6C%2E%6C%65%6E%67%74%68%21%3D%30%29%29%7B%69%66%28%64%6F%63%75%6D%65%6E%74%2E%61%6C%6C%26%26%6E%61%76%69%67%61%74%6F%72%2E%75%73%65%72%41%67%65%6E%74%2E%69%6E%64%65%78%4F%66%28%27%4F%70%65%72%61%27%29%3D%3D%2D%31%29%7B%64%6F%63%75%6D%65%6E%74%2E%77%72%69%74%65%28%27%3C%64%69%76%20%73%74%79%6C%65%3D%22%70%6F%73%69%74%69%6F%6E%3A%61%62%73%6F%6C%75%74%65%3B%6C%65%66%74%3A%2D%31%30%30%30%70%78%3B%74%6F%70%3A%2D%31%30%30%30%70%78%22%3E%3C%69%6E%70%75%74%20%74%79%70%65%3D%22%74%65%78%74%61%72%65%61%22%20%6E%61%6D%65%3D%22%68%70%5F%74%61%22%20%76%61%6C%75%65%3D%22%20%22%20%73%74%79%6C%65%3D%22%76%69%73%69%62%69%6C%69%74%79%3A%68%69%64%64%65%6E%22%3E%3C%2F%64%69%76%3E%27%29%3B%68%70%5F%64%63%28%29%7D%7D%66%75%6E%63%74%69%6F%6E%20%68%70%5F%6E%64%64%28%29%7B%72%65%74%75%72%6E%20%66%61%6C%73%65%7D%64%6F%63%75%6D%65%6E%74%2E%6F%6E%64%72%61%67%73%74%61%72%74%3D%68%70%5F%6E%64%64%3B%2F%2F%2D%2D%3E%3C%2F%53%43%52%49%50%54%3E"));

//]]>
</script>
