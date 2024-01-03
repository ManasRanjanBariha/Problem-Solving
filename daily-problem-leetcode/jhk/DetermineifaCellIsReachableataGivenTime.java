class Solution {
    public boolean isReachableAtTime(int sx, int sy, int fx, int fy, int t) {
        int x=Math.abs(sx-fx);
        int y=Math.abs(sy-fy);
        if(x==0 && y==0)
        {
            return t!=1;
        }
        return x <=t && y <=t;
    }
}