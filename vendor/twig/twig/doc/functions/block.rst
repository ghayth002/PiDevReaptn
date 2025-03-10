``block``
=========

When a template uses inheritance and if you want to render a block multiple
times, use the ``block`` function:

.. code-block:: html+twig

    <title>{% block title %}{% endblock %}</title>

    <h1>{{ block('title') }}</h1>

    {% block body %}{% endblock %}

The ``block`` function can also be used to display one block from another
template:

.. code-block:: twig

    {{ block("title", "common_blocks.html.twig") }}

Use the ``defined`` test to check if a block exists in the context of the
current template:

.. code-block:: twig

    {% if block("footer") is defined %}
        ...
    {% endif %}

    {% if block("footer", "common_blocks.html.twig") is defined %}
        ...
    {% endif %}

Arguments
---------

* ``name``: The block name
* ``template``: The template where to look for the block

.. seealso::

    :doc:`extends<../tags/extends>`, :doc:`parent<../functions/parent>`
