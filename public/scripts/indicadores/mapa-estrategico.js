jsPlumb.ready(function () {

    // setup some defaults for jsPlumb.
    var instance = jsPlumb.getInstance({
        Endpoint: ["Dot", {radius: 2}],
        HoverPaintStyle: {strokeStyle: "#18bc9c", lineWidth: 2 },
        ConnectionOverlays: [
            [ "Arrow", {
                location: 1,
                id: "arrow",
                length: 14,
                foldback: 0.8
            } ]
        ],
        Container: "canvas"
    });

    window.jsp = instance;

    var canvas = document.getElementById("canvas");
    var windows = jsPlumb.getSelector(".statemachine-demo .w");

    //
    // initialise element as connection targets and source.
    //
    var initNode = function(el) {

        // initialise draggable elements.
        instance.draggable(el);

        instance.makeSource(el, {
            filter: ".ep",
            anchor: "Continuous",
            connector: [ "StateMachine", { curviness: 20 } ],
            connectorStyle: { strokeStyle: "#2c3e50", lineWidth: 2, outlineColor: "transparent", outlineWidth: 4 },
            maxConnections: 5,
            onMaxConnections: function (info, e) {
                alert("Maximum connections (" + info.maxConnections + ") reached");
            }
        });

        instance.makeTarget(el, {
            dropOptions: { hoverClass: "dragHover" },
            anchor: "Continuous",
            allowLoopback: false // No permite relaciones así mismo
        });

    };

    // suspend drawing and initialise.
    instance.batch(function () {
        for (var i = 0; i < windows.length; i++) {
            initNode(windows[i], true);
        }
        // and finally, make a few connections
        for(i=0; i<4; ++i)
            instance.connect({ source: "obj"+(i+1), target: "obj"+i });
    });

    jsPlumb.fire("jsPlumbDemoLoaded", instance);
});


$(function() {
    // Click sobre un proceso
    for (var i=0; i<4; ++i) {
        $(document).on('click', '#obj'+i, function() {
            location.href = $(this).data('destino');
        });
    }

    // Código para preparar la impresión
    $("#btnSave").click(function() {
  		var headContents = $("head").html();
  		var divContents = "<div class='jtk-demo-main'>" + $(".jtk-demo-main").html() + "</div>";
  		var alto = screen.height-100;
  		var ancho = screen.width-100;
        var printWindow = window.open('', '', 'height='+alto+',width='+ancho);
        printWindow.document.write('<html><head>');
        printWindow.document.write(headContents);
        printWindow.document.write('</head><body>');
        printWindow.document.write(divContents);
        printWindow.document.write('</body></html>');
        setTimeout(function() {
        	printWindow.print();
            printWindow.close();
        }, 777); // <-- time in milliseconds
    });
});
