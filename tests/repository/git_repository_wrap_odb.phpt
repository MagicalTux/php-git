--TEST--
Check for git_repository_wrap_odb presence
--SKIPIF--
<?php if (!extension_loaded("git2")) print "skip"; ?>
--FILE--
<?php
echo "NOT YET";
--XFAIL--
NOT YET
--EXPECT--
