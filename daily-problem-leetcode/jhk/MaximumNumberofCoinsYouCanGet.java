class Solution {
    public int maxCoins(int[] piles) {
        Arrays.sort(piles);
        int left=0;
        int right=piles.length-2;
        int sum=0;
        while(left <right)
        {
            sum+=piles[right];
            right-=2;
            left++;
        }
        return sum;
    }
}