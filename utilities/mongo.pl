#!/usr/bin/perl

use strict;
use warnings;

use MongoDB;
use Data::Dumper;

for(1..10) { 

print "$_\n";
}

my $a = {
	'a'=>10
};

print Dumper($a);
