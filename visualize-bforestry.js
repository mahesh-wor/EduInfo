  function init() {
    if (window.goSamples) goSamples();  // init for these samples -- you don't need to call this

    var $ = go.GraphObject.make;  // for conciseness in defining templates

    myDiagram = $(go.Diagram, "myDiagramDiv",  // create a Diagram for the DIV HTML element
                  {
                    initialContentAlignment: go.Spot.Center,  // center the content
                    "undoManager.isEnabled": true  // enable undo & redo
                  });

    // define a simple Node template
    myDiagram.nodeTemplate =
      $(go.Node, "Auto",  // the Shape will go around the TextBlock
        $(go.Shape, "RoundedRectangle", { strokeWidth: 0},
          // Shape.fill is bound to Node.data.color
          new go.Binding("fill", "color")),
        $(go.TextBlock,
          { margin: 8 },  // some room around the text
          // TextBlock.text is bound to Node.data.key
          new go.Binding("text", "key"))
      );

    // but use the default Link template, by not setting Diagram.linkTemplate

    // create the model data that will be represented by Nodes and Links
    myDiagram.model = new go.GraphLinksModel(
    [
      { key: "SEE", color: "lightblue" },
      { key: "+2 Science", color: "lightgreen" },
      { key: "Diploma in Forestry", color: "lightgreen" },
      { key: "Bachelor in Forestry", color: "lightblue" },
      { key: "I.Sc", color: "lightgreen" },
      { key: "Technical Certificate Level(TCL)", color: "lightgreen"},
      { key: "A Level(Mathematics & Biology)", color: "lightblue"}
    ],
    [
      { from: "SEE", to: "I.Sc" },
      { from: "SEE", to: "Diploma in Forestry" },
      { from: "SEE", to: "Technical Certificate Level(TCL)" },
      { from: "SEE", to: "+2 Science" },
      { from: "SEE", to: "A Level(Mathematics & Biology)" },
      { from: "I.Sc", to: "Bachelor in Forestry" },
      { from: "Diploma in Forestry", to: "Bachelor in Forestry" },
      { from: "Technical Certificate Level(TCL)", to: "Bachelor in Forestry" },
      { from: "+2 Science", to: "Bachelor in Forestry" },
      { from: "A Level(Mathematics & Biology)", to: "Bachelor in Forestry" }
    ]);
  }