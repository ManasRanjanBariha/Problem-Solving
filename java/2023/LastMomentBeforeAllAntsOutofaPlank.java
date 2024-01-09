class Solution {
    public int getLastMoment(int n, int[] left, int[] right) {
        int time=0;
        for(int pos:left)
        {
            time=Math.max(pos,time);
        }
        for(int pos:right)
        {
            time=Math.max(n-pos,time);
        }
        return time;
    }
}