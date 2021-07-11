1. Create bicycle class, think about what can the bicycle do

- Vision system - e.g., check if the instance of the bicycle class is at the edge
- Method called move(dx, dy)
- Work out how to detect where bike is facing

2. Create a grid cell class, think about what the grid cell can do

- Store its position in the grid, either x,y coord

3. Create a grid class, think about what the grid can do
4. Create a application manager class, think about what the application can do

- GPS system, tracking where the bike is
- Command system, registering the user input -> console log location for now

5. Make it render on screen properly -> using html, css
6. Work out how to make the bike turn
7. Work out how to make the bike move
8. Build GPS UI
9. Connect the user input to bike's movement
10. Work out how to detect edges - part of the vision system

Index method
00 01 02 03 04 05 06 rounddown(index / rows) = 0 => first row
07 08 09 10 11 12 13
14 15 16 17 18 19 20
21 22 23 24 25 26 27
28 29 30 31 32 33 34
35 36 37 38 39 40 41
42 43 44 45 46 47 48 rounddown(index / rows) = cols - 1 => last row

left column <= index % col === 0
right column <= index % col === col - 1

x,y method
0,0 0,1 0,2 0,3 0,4 0,5 0,6
...
6,0 6,1... 6,6

x = 0 === top edge x = 6 === bottom edge y = 0 left edge y = 6 right edge

PLAN OF ACTION

1. Flip grid so that 0,0 is at the bottom left of the grid
2. Create three buttons: FORWARD, TURN RIGHT, TURN LEFT
3. Add arbitary handlers to those buttons, e.g., console.log when buttons are clicked
4. Work on the rotation first, e.g., if facing NORTH and click TURN RIGHT, it should say facing EAST, you can echo or console.log the facing
5. Work on movement according to facing
6. GPS report
7. Vision function, a.k.a. edge detection, a.k.a. don't fall off the grid.
8. Refactor the hard coded grid, and use for loops.
