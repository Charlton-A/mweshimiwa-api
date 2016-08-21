Mweshimiwa-api: Simple Unoffcial  API
================================================================
.. image:: https://raw.githubusercontent.com/Charlton-A/mweshimiwa-api/master/mweshmiwa.png
        :alt: sample web interface
        :width: 500
        :align: center

Introduction
------------
An API built using `Fat-Free`_ Framework.It queries the Kenyan parlianment
based on constituency name.

It queries Reprentative name,Party of the respresntative and the County based
on constituency. 

Project link is `link`_

Requirements
------------
-`Fat-Free`_ Framework.

Frontend
------------
The front-end is built with `w3.css`_

Usage
-----
For  the API

.. code-block:: bash

   Exmaple to check "Kajiado North"

   mweshimiwa-api.herokuapp.com/respresntative/name?Kajiado+North

   returns:
          {
            "Constituency":"Kajiado North",
            "Name":"Manje Joseph Wathigo",
            "Status":"Success",
            "Message":"Representative of the constituency found"
          }


  The + sign represents spaces



Project structure
-----------------

.. code-block:: bash

    ├── app
    │   ├── Api.php
    │   ├── Connection.php
    │   └── Users.php
    ├── composer.json
    ├── composer.lock
    ├── composer.phar
    ├── config
    │   ├── config.ini
    │   └── routes.ini
    ├── db
    │   └── data.json
    ├── favicon.ico
    ├── index.php
    ├── mweshmiwa.png
    ├── Procfile
    ├── README.rst
    ├── tmp
    └── ui
    ├── about.html
    ├── county.json
    ├── dist
    ├── home.html
    ├── images
    ├── macros
    │   ├── footer.html
    │   └── header.html
    ├── party.json
    ├── representative.json
    └── usage.html



License
-------

Mweshiwa API is distributed under the `MIT License`_.

.. _MIT License: http://opensource.org/licenses/MIT
.. _Fat-Free: https://fatfreeframework.com/home
.. _link: https://mweshimiwa.herokuapp.com/
.. _w3.css: http://www.w3schools.com/w3css/
