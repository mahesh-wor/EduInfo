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
      { key: "+2 Science with Biology", color: "lightgreen" },
      { key: "Proficiency Certificate in Medical Science", color: "lightgreen" },
      { key: "MBBS", color: "lightblue" }
      
    ],
    [
      { from: "SEE", to: "+2 Science with Biology" },
      { from: "SEE", to: "Proficiency Certificate in Medical Science" },
      { from: "+2 Science with Biology", to: "MBBS" },
      
     
    ]);
  }