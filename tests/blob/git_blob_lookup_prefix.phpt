--TEST--
Check for git_blob_lookup_prefix presence
--SKIPIF--
<?php if (!extension_loaded("git2")) print "skip"; ?>
--FILE--
<?php
echo "NOT YET";
--XFAIL--
NOT YET
--EXPECT--
