<!DOCTYPE html>
<html>
    <head>
        <title>Learn JS</title>
        
    </head>
    <body>
       
        
        <h1>The Marauder's Map</h1>
        <h3>Search for a Witch or Wizard</h3>
        <form>
            Name:
            <input type="text" id="name"/>
            Patronus:
            <input type="text" id="patronus"/>
            House:
            <select id="house">
              <option value="1">Gryffindor</option>
              <option value="2">Hufflepuff</option>
              <option value="3">Ravenclaw</option>
              <option value="4">Slytherin</option>
            </select>
            <input type="button" value="Search" onClick="search()"/>
        </form>
         <div id="myDIV">
        </div>
        <table>
            <tr>
                <th> name </th>
                <th> house </th>
                <th> patronus </th>
            </tr>
            <tbody id="data">
                
            </tbody>
        </table>
        
        <script type="text/javascript" src="/jsTut/main.js"></script>
    </body>
</html>