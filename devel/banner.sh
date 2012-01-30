#!/bin/bash
LOG=/var/log/auth.log
ACCEPT="Accepted"
FAIL="Failed"

cat $LOG | grep $FAIL | grep "root"| awk '{ print $11}'| uniq> banner_fail
cat $LOG | grep $FAIL | grep -v "root" | awk '{print $13}'| uniq >> banner_fail
cat $LOG | grep $ACCEPT > banner_access
