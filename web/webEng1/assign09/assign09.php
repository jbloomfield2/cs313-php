<?xml version='1.0' encoding='UTF-8'?>
<?xml-stylesheet type="text/xsl" href="assign09.xsl"?>
<?php
	header('Content-type: text/xml');
	print 
	"
	
	<studentList>
	<student>
		<name>
			<first>Jacob</first>
			<last>Bloomfield</last>
		</name>
		<location>
			<city>Auburn</city>
			<state>CA</state>
		</location>
		<college name=\"BYU Idaho\">
			<department name=\"Computer Sci and Eng\">
				<major>Computer Science</major>
			</department>
		</college>
	</student>
	<student>
		<name>
			<first>Howard</first>
			<last>Chavez</last>
		</name>
		<location>
			<city>Huntington</city>
			<state>WV</state>
		</location>
		<college name=\"Berkely\">
		<department name=\"English\">
			<major>English</major>
		</department>
		</college>
	</student>
	<student>
		<name>
			<first>Jeffrey</first>
			<last>Henry</last>
		</name>
		<location>
			<city>Norfolk</city>
			<state>VA</state>
		</location>
		<college name=\"BYU Provo\">
		<department name=\"Science\"><major>Physics</major></department></college>
	</student>
	<student>
		<name>
			<first>Robert</first>
			<last>West</last>
		</name>
		<location>
			<city>San Jose</city>
			<state>CA</state>
		</location>
		<college name=\"UC Davis\">
			<department name=\"general\">
				<major>General studies</major>
			</department>
		</college>
	</student>
	<student>
		<name>
			<first>Victor</first>
			<last>Lawson</last>
		</name>
		<location>
			<city>Chicago</city>
			<state>IL</state>
		</location>
		<college name=\"BYU Idaho\">
			<department name=\"undeclared\">
				<major>undeclared</major>
			</department>
		</college>
	</student>
</studentList>
"
	?>