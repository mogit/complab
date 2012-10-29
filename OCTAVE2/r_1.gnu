set title "distributions"
set xlabel "X values"
set ylabel "Y values"
set key at 45,0.12
set term png
set output "plot1.png"
set label "n=50 p=0.3 mu=15 lambda=15" at 15,0.13
plot 'y1.txt' with lines title"y1",\
'y2.txt' with lines title "y2",\
'y3.txt' with lines title "y3"
pause -1
