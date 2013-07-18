## About:

Convert all applicable characters to HTML entities.

-----

## Usage:

    {exp:jsencode:string}Nothing to escape{/exp:jsencode:string}
	=> Nothing to escape

	{exp:jsencode:string}/image/bridge.jpg{/exp:jsencode:string}
	=> \/image\/bridge.jpg

	{exp:jsencode:string}He said, "That's not true."{/exp:jsencode:string}
	=> He said, \"That's not true.\"

-----

## Changelog:

    Version 1.0.0
    2013/02/01: Initial public release.
