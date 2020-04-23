<div {{ $attributes }}>
    ...
</div>

<script type="text/javascript">
    /**
     * @param {Element} node
     * @param {Function} callback
     */
    function walkDOM(node, callback) {
        node = node.firstElementChild;

        while(node) {
            walkDOM(node, callback);

            node = node.nextElementSibling;
        }
    }

    const $sub = document.querySelector('#test-subject');

    console.log($sub);
</script>
